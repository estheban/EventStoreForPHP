<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class TransactionWriteCompleted
{
    public $transactionId;
    public $result;
    public $message;

    /**
     * @param int             $transactionId
     * @param OperationResult $result
     * @param string|null     $message
     */
    public function __construct($transactionId, OperationResult $result, $message = null)
    {
        $this->transactionId    = (int) $transactionId;
        $this->result           = $result;
        $this->message          = (string) $message;
    }
}
