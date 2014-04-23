<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class TransactionWrite
{
    public $transactionId;
    public $events;
    public $requireMaster;

    /**
     * @param int        $transactionId
     * @param NewEvent[] $events
     * @param bool       $requireMaster
     */
    public function __construct($transactionId, array $events, $requireMaster)
    {
        $this->transactionId = (int)  $transactionId;
        $this->events        = $events;
        $this->requireMaster = (bool) $requireMaster;
    }
}
