<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class DeleteStreamCompleted
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
     * @param int|null        $preparePosition
     * @param int|null        $commitPosition
     */
    public function __construct(OperationResult $result, $message = null, $preparePosition = null, $commitPosition = null)
    {
        $this->result           = $result;
        $this->message          = (string) $message;
        $this->preparePosition  = $preparePosition ? (int) $preparePosition : null;
        $this->commitPosition   = $commitPosition  ? (int) $commitPosition  : null;
    }
}
