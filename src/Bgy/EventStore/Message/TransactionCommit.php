<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class TransactionCommit
{
    public $transactionId;
    public $requireMaster;

    /**
     * @param int  $transactionId
     * @param bool $requireMaster
     */
    public function __construct($transactionId, $requireMaster)
    {
        $this->transactionId = (int)  $transactionId;
        $this->requireMaster = (bool) $requireMaster;
    }
}
