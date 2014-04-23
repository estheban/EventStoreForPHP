<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;

class ReadEventResult
{
    private $value;

    const SUCCESS        = 0;
    const NOT_FOUND      = 1;
    const NO_STREAM      = 2;
    const STREAM_DELETED = 3;
    const ERROR          = 4;
    const ACCESS_DENIED  = 5;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
