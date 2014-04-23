<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Transport\Http;

use Bgy\EventStore\EventReadResult;
use Bgy\EventStore\EventReadStatus;
use Bgy\EventStore\Operation\AppendToStreamOperation;
use Bgy\EventStore\Operation\ClientOperation;
use Bgy\EventStore\Operation\DeleteStreamOperation;
use Bgy\EventStore\Operation\ReadEventOperation;
use Bgy\EventStore\Transport\Transport;
use Bgy\EventStore\Transport\UnknownOperationException;

class HttpTransport implements Transport
{
    private $httpClient;

    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function makeOperation(ClientOperation $operation)
    {
        $operationName = $operation->getOperationName();
        switch ($operationName) {
            case 'ReadEvent':
                return $this->readEvent($operation);

            case 'DeleteStream':
                return $this->deleteStream($operation);

            case 'AppendToStream':
                return $this->appendToStream($operation);
        }

        throw new UnknownOperationException($operationName);
    }

    private function appendToStream(AppendToStreamOperation $operation)
    {
        $requestMessage = $operation->createRequestDto();

        $normalizedEvents = [];
        foreach ($requestMessage->events as $eventData) {
            $normalizedEvents[] = [
                'eventId'   => $eventData->eventId,
                'eventType' => $eventData->eventType,
                'data'      => $eventData->data,
                'metadata'  => $eventData->metadata,
            ];
        }

        $this->httpClient->writeStreamEvents(
            $requestMessage->eventStreamId,
            $normalizedEvents,
            $requestMessage->expectedVersion,
            $requestMessage->requireMaster
        );

        return true;
    }

    private function deleteStream(DeleteStreamOperation $operation)
    {
        $requestMessage = $operation->createRequestDto();

        $r = $this->httpClient
            ->deleteStream(
                $requestMessage->eventStreamId,
                $requestMessage->expectedVersion,
                $requestMessage->requireMaster,
                $requestMessage->hardDelete
            );
        ;

        var_dump($r);

        return true;
    }

    private function readEvent(ReadEventOperation $operation)
    {
        $requestMessage = $operation->createRequestDto();

        $rawResult = $this->httpClient
            ->getStreamEvent($requestMessage->eventStreamId, $requestMessage->eventNumber)['content']
        ;

        return
            new EventReadResult(
                new EventReadStatus(EventReadStatus::SUCCESS),
                $requestMessage->eventStreamId,
                $rawResult['eventNumber'],
                $rawResult['eventType'],
                $rawResult['data'],
                $rawResult['metadata']
            )
        ;
    }
}
