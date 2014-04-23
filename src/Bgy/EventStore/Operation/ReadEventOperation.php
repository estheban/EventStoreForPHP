<?php

namespace Bgy\EventStore\Operation;

use Bgy\EventStore\Message\ReadEvent;

class ReadEventOperation extends OperationBase
{
    private $eventStreamId;
    private $eventNumber;
    private $resolveLinkTo;
    private $requireMaster;

    public function __construct($eventStreamId, $eventNumber, $resolveLinkTo, $requireMaster)
    {
        $this->eventStreamId = $eventStreamId;
        $this->eventNumber   = $eventNumber;
        $this->resolveLinkTo = $resolveLinkTo;
        $this->requireMaster = $requireMaster;
    }

    public function createRequestDto()
    {
        return new ReadEvent($this->eventStreamId, $this->eventNumber, $this->resolveLinkTo, $this->requireMaster);
    }

    public function getOperationName()
    {
        return 'ReadEvent';
    }
}
