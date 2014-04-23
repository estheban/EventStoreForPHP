<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore;

use Bgy\EventStore\Position;

class ResolvedEvent
{
    /**
     * @var RecordedEvent
     */
    private $event;

    /**
     * @var RecordedEvent
     */
    private $link;

    /**
     * @var RecordedEvent
     */
    private $originalEvent;

    /**
     * @var bool
     */
    private $isResolved;

    /**
     * @var Position
     */
    private $originalPosition;

    /**
     * @var string
     */
    private $originalStreamId;

    /**
     * @var int
     */
    private $originalEventNumber;

    public function __construct($event)
    {
        if ($event !== null || !($event instanceof ResolvedIndexedEvent) || !($event instanceof ResolvedEvent)) {

            throw new \InvalidArgumentException(sprintf("\$event must be an instance of ResolvedIndexedEvent or ResolvedEvent"));
        }

        if ($event instanceof ResolvedIndexedEvent) {
            $this->event = $event->event ? new RecordedEvent($event->event) : null;
            $this->link  = $event->link  ? new RecordedEvent($event->link)  : null;
            $this->originalPosition = null;
        } else if ($event instanceof ResolvedEvent) {
            $this->event = new RecordedEvent($event->getEvent());
            $this->link  = $event->link ? new RecordedEvent($event->getLink())  : null;
            $this->originalPosition = new Position($event->getOriginalPosition());
        }
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function isResolved()
    {
        return $this->isResolved;
    }

    public function getOriginalEvent()
    {
        return $this->originalEvent;
    }

    public function getOriginalEventNumber()
    {
        return $this->originalEventNumber;
    }

    public function getOriginalPosition()
    {
        return $this->originalPosition;
    }

    public function getOriginalStreamId()
    {
        return $this->originalStreamId;
    }
}
