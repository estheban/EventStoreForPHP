<?php

namespace Bgy\EventStore\Operation;

use Bgy\EventStore\Message\NewEvent;
use Bgy\EventStore\Message\WriteEvents;
use Bgy\EventStore\UserCredentials;
use Bgy\EventStore\EventData;

class AppendToStreamOperation extends OperationBase
{
    private $requireMaster;
    private $stream;
    private $expectedVersion;
    private $events;
    private $userCredentials;

    /**
     * @param bool            $requireMaster
     * @param string          $stream
     * @param int             $expectedVersion
     * @param EventData[]     $events
     * @param UserCredentials $userCredentials
     */
    public function __construct($requireMaster, $stream, $expectedVersion, array $events, UserCredentials $userCredentials = null)
    {
        $this->requireMaster   = $requireMaster;
        $this->stream          = $stream;
        $this->expectedVersion = $expectedVersion;
        $this->events          = $events;
        $this->userCredentials = $userCredentials;
    }

    public function createRequestDto()
    {
        $eventsMessages = [];
        foreach ($this->events as $event) {
            $eventsMessages[] = new NewEvent(
                (string) $event->getEventId(),
                $event->getType(),
                1,
                1,
                $event->getData(),
                $event->getMetadata()
            );
        }

        return new WriteEvents($this->stream, $this->expectedVersion, $eventsMessages, $this->requireMaster);
    }

    public function getOperationName()
    {
        return 'AppendToStream';
    }
}
