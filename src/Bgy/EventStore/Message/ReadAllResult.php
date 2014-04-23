<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class ReadAllResult
{
    private $value;

    const SUCCESS       = 0;
    const NOT_MODIFIED  = 1;
    const ERROR         = 2;
    const ACCESS_DENIED = 3;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
