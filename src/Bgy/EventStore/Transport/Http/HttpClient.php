<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Transport\Http;

use Guzzle\Http\Message\Header;
use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;

class HttpClient
{
    private $httpClient;

    public function __construct()
    {
        $params = array(
            'request.options' => array(
                'proxy'   => 'tcp://192.168.1.10:8888'
            ),
            'curl.options' => array(
                'CURLOPT_PROXY' => 'http://192.168.1.10:8888',
            )
        );

        $this->httpClient = new Client($params);
        $this->httpClient->setDescription(
            ServiceDescription::factory(__DIR__ . '/Resources/descriptor.json')
        );

        $this->httpClient->setUserAgent('EventStoreHttpClientForPHP/1.0', true);
        $this->httpClient->getConfig()->setPath('command.headers/Accept',       'application/vnd.eventstore.events+json');
        $this->httpClient->getConfig()->setPath('command.headers/Content-Type', 'application/vnd.eventstore.events+json');
        $this->httpClient->getConfig()->setPath('curl.options/'. CURLOPT_PROXY, 'http://192.168.1.10:8888');
    }

    public function getStream($streamName)
    {
        $command = $this->httpClient
            ->getCommand(
                'GetStream',
                array(
                    'streamName' => $streamName,
                )
            )
        ;

        $response = $this->httpClient->execute($command);

        return $response;
    }

    public function deleteStream($streamName, $expectedVersion = null, $requireMaster = null, $hardDelete = null)
    {
        $commandParameters = ['streamName' => $streamName];

        if ($expectedVersion) {
            $commandParameters['expectedVersion'] = $expectedVersion;
        }

        if ($hardDelete) {
            $commandParameters['hardDelete'] = true === (bool) $hardDelete ? 'true' : 'false';
        }

        if ($requireMaster) {
            $commandParameters['requireMaster'] = true === (bool) $requireMaster ? 'true' : 'false';
        }

        $command = $this->httpClient
            ->getCommand('DeleteStream', $commandParameters)
        ;

        return $this->httpClient->execute($command);
    }

    public function getStreamEvent($streamName, $eventId)
    {
        $command = $this->httpClient
            ->getCommand(
                'GetStreamEvent',
                array(
                    'streamName' => $streamName,
                    'eventId'    => $eventId,
                )
            )
        ;

        return $this->httpClient->execute($command);
    }

    public function writeStreamEvents($streamName, array $events, $expectedVersion = null, $requireMaster = null)
    {
        $commandParameters = ['streamName' => $streamName, 0 => $events];

        if ($expectedVersion) {
            $commandParameters['expectedVersion'] = $expectedVersion;
        }
        if ($requireMaster) {
            $commandParameters['requireMaster'] = true === (bool) $requireMaster ? 'true' : 'false';
        }

        // I'm not able to properly define parameters as an indexed array in guzzle
        // So for now, just manually build the request.
        $command = $this->httpClient->getCommand('WriteStreamEvents', $commandParameters);
        $command->prepare();

        $headers = $command->getRequest()->getHeaders();
        $headers->add(new Header('Content-Type', 'application/vnd.eventstore.events+json'));

        $request = $this->httpClient->post(
            $command->getRequest()->getUrl(),
            $headers,
            json_encode($events)
        );

        return $request->send();
    }
}
