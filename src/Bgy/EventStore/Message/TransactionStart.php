<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class TransactionStart
{
    public $eventStreamId;
    public $expectedVersion;
    public $requireMaster;

    /**
     * @param string $eventStreamId
     * @param int    $expectedVersion
     * @param bool   $requireMaster
     */
    public function __construct($eventStreamId, $expectedVersion, $requireMaster)
    {
        $this->eventStreamId   = (string) $eventStreamId;
        $this->expectedVersion = (int)    $expectedVersion;
        $this->requireMaster   = (bool)   $requireMaster;
    }
}
