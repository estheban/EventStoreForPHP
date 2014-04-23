<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class OperationResult
{
    private $value;

    const SUCCESS                = 0;
    const PREPARE_TIMEOUT        = 1;
    const COMMIT_TIMEOUT         = 2;
    const FORWARD_TIMEOUT        = 3;
    const WRONG_EXPECTED_VERSION = 4;
    const STREAM_DELETED         = 5;
    const INVALID_TRANSACTION    = 6;
    const ACCESS_DENIED          = 7;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
