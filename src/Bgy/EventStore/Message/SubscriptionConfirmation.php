<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class SubscriptionConfirmation
{
    public $lastCommitPosition;
    public $lastEventNumber;

    /**
     * @param int      $lastCommitPosition
     * @param int|null $lastEventNumber
     */
    public function __construct($lastCommitPosition, $lastEventNumber = null)
    {
        $this->lastCommitPosition = (int) $lastCommitPosition;
        $this->lastEventNumber    = $lastEventNumber ? (int) $lastEventNumber : null;
    }
} 
