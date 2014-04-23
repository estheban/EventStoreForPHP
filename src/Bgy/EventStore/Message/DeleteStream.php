<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;

class DeleteStream
{
    public $eventStreamId;
    public $expectedVersion;
    public $requireMaster;
    public $hardDelete;

    public function __construct($eventStreamId, $expectedVersion, $requireMaster, $hardDelete)
    {
        $this->eventStreamId   = (string) $eventStreamId;
        $this->expectedVersion = (int)    $expectedVersion;
        $this->requireMaster   = (bool)   $requireMaster;
        $this->hardDelete      = (bool)   $hardDelete;
    }
}
