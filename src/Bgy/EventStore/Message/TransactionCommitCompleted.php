<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class TransactionCommitCompleted
{
    public $transactionId;
    public $result;
    public $message;
    public $firstEventNumber;
    public $lastEventNumber;
    public $preparePosition;
    public $commitPosition;

    /**
     * @param int             $transactionId
     * @param OperationResult $result
     * @param string|null     $message
     * @param                 $firstEventNumber
     * @param                 $lastEventNumber
     * @param int|null        $preparePosition
     * @param int|null        $commitPosition
     */
    public function __construct($transactionId, OperationResult $result, $message = null, $firstEventNumber, $lastEventNumber, $preparePosition = null, $commitPosition = null)
    {
        $this->transactionId    = (int)    $transactionId;
        $this->result           = $result;
        $this->message          = (string) $message;
        $this->firstEventNumber = (int)    $firstEventNumber;
        $this->lastEventNumber  = (int)    $lastEventNumber;
        $this->preparePosition  = $preparePosition ? (int) $preparePosition : null;
        $this->commitPosition   = $commitPosition  ? (int) $commitPosition  : null;
    }
}
