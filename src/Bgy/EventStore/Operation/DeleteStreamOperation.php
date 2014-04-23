<?php

namespace Bgy\EventStore\Operation;

use Bgy\EventStore\Message\DeleteStream;

class DeleteStreamOperation extends OperationBase
{
    private $eventStreamId;
    private $expectedVersion;
    private $requireMaster;
    private $hardDelete;

    public function __construct($eventStreamId, $expectedVersion, $requireMaster, $hardDelete)
    {
        $this->eventStreamId   = $eventStreamId;
        $this->expectedVersion = $expectedVersion;
        $this->requireMaster   = $requireMaster;
        $this->hardDelete      = $hardDelete;
    }

    public function createRequestDto()
    {
        return new DeleteStream($this->eventStreamId, $this->expectedVersion, $this->requireMaster, $this->hardDelete);
    }

    public function getOperationName()
    {
        return 'DeleteStream';
    }
}
