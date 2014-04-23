<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;

class NotHandledReason
{
    private $value;
    private $additionalInfo;

    const NOT_READY  = 0;
    const TOO_BUSY   = 1;
    const NOT_MASTER = 2;

    public function __construct($value, $additionalInfo = null)
    {
        $this->value          = $value;
        $this->additionalInfo = $additionalInfo ? (string)$additionalInfo : null;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }
}
