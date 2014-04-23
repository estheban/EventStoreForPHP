<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore;

final class ReadDirection
{
    const FORWARD  = 'forward';

    const BACKWARD = 'backward';

    public function __construct($direction)
    {
        if (!in_array($direction, [self::FORWARD, self::BACKWARD])) {
            throw new InvalidExceptedVersionException();
        }

        $this->value = $direction;
    }

    public function getValue()
    {
        return $this->value;
    }
}
