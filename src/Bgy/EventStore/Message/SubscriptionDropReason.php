<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;

class SubscriptionDropReason
{
    private $value;

    const UNSUBSCRIBED  = 0;
    const ACCESS_DENIED = 1;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
