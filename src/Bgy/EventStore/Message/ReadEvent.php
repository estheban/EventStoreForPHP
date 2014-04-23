<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;

class ReadEvent
{
    public $eventStreamId;
    public $eventNumber;
    public $resolveLinkTo;
    public $requireMaster;

    public function __construct($eventStreamId, $eventNumber, $resolveLinkTo, $requireMaster)
    {
        $this->eventStreamId = (string) $eventStreamId;
        $this->eventNumber   = (int)    $eventNumber;
        $this->resolveLinkTo = (bool)   $resolveLinkTo;
        $this->requireMaster = (bool)   $requireMaster;
    }
}
