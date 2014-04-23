<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore;


use Bgy\EventStore\Message\ResolvedIndexedEvent;
use Bgy\EventStore\Utils\Ensure;

class EventReadResult
{
    private $status;
    private $eventStreamId;
    private $eventNumber;

    public function __construct(EventReadStatus $status, $eventStreamId, $eventNumber, ResolvedIndexedEvent $event)
    {
        Ensure::notNullOrEmpty($eventStreamId, 'eventStreamId');

        $this->status        = $status;
        $this->eventStreamId = $eventStreamId;
        $this->eventNumber   = $eventNumber;
        $this->event         = (EventReadStatus::SUCCESS === $status->getValue()) ? new ResolvedIndexedEvent($event) : null;
    }

    public function getEventNumber()
    {
        return $this->eventNumber;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getStream()
    {
        return $this->eventStreamId;
    }
} 
