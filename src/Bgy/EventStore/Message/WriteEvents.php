<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;

class WriteEvents
{
    public $eventStreamId;
    public $expectedVersion;
    public $events;
    public $requireMaster;

    /**
     * @param string     $eventStreamId
     * @param int        $expectedVersion
     * @param NewEvent[] $events
     * @param bool       $requireMaster
     */
    public function __construct($eventStreamId, $expectedVersion, array $events, $requireMaster)
    {
        $this->eventStreamId   = (string) $eventStreamId;
        $this->expectedVersion = (int)    $expectedVersion;
        $this->events          = $events;
        $this->requireMaster   = (bool)   $requireMaster;
    }
}
