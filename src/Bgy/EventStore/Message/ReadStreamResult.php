<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;

class ReadStreamResult
{
    private $value;

    const SUCCESS        = 0;
    const NO_STREAM      = 1;
    const STREAM_DELETED = 2;
    const NOT_MODIFIED   = 3;
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
