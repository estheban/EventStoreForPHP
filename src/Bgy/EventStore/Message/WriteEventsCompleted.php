<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class WriteEventsCompleted
{
    public $result;
    public $message;
    public $firstEventNumber;
    public $lastEventNumber;
    public $preparePosition;
    public $commitPosition;

    /**
     * @param OperationResult $result
     * @param string|null     $message
     * @param                 $firstEventNumber
     * @param                 $lastEventNumber
     * @param int|null        $preparePosition
     * @param int|null        $commitPosition
     */
    public function __construct(OperationResult $result, $message = null, $firstEventNumber, $lastEventNumber, $preparePosition = null, $commitPosition = null)
    {
        $this->result           = $result;
        $this->message          = (string) $message;
        $this->firstEventNumber = (int)    $firstEventNumber;
        $this->lastEventNumber  = (int)    $lastEventNumber;
        $this->preparePosition  = $preparePosition ? (int) $preparePosition : null;
        $this->commitPosition   = $commitPosition  ? (int) $commitPosition  : null;
    }
}
