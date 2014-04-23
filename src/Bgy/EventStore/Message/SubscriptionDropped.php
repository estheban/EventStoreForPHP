<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;

use Bgy\EventStore\SubscriptionDropped\SubscriptionDropReason;

class SubscriptionDropped
{
    public $reason;

    /**
     * @param SubscriptionDropReason $reason
     */
    public function __construct(SubscriptionDropReason $reason)
    {
        $this->reason = $reason;
    }
} 
