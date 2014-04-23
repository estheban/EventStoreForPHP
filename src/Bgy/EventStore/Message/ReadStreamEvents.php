<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;

class ReadStreamEvents
{
    public $eventStreamId;
    public $fromEventNumber;
    public $maxCount;
    public $resolveLinkTos;
    public $requireMaster;

    /**
     * @param string $eventStreamId
     * @param int    $fromEventNumber
     * @param int    $maxCount
     * @param int    $resolveLinkTos
     * @param int    $requireMaster
     */
    public function __construct($eventStreamId, $fromEventNumber, $maxCount, $resolveLinkTos, $requireMaster)
    {
        $this->eventStreamId   = (string) $eventStreamId;
        $this->fromEventNumber = (int) $fromEventNumber;
        $this->maxCount        = (int) $maxCount;
        $this->resolveLinkTos  = (bool) $resolveLinkTos;
        $this->requireMaster   = (bool) $requireMaster;
    }
}
