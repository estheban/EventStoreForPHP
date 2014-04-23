<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Utils;

use Assert\Assertion;

class Ensure
{
    static public function positive($number, $argName)
    {
        Assertion::min($number, 0, sprintf(('"%s" must be a positive integer'), $argName));
    }

    static public function notNullOrEmpty($arg, $argName)
    {
        Assertion::notBlank($arg, 0, sprintf(('"%s" must not be null or empty'), $argName));
    }

    static public function notNull($arg, $argName)
    {
        Assertion::notNull($arg, 0, sprintf(('"%s" must not be null'), $argName));
    }

    static public function equals($actual, $expected, $argName)
    {
        Assertion::eq($actual, $expected, sprintf('Expected value for "%s" was "%s", but "%s" was given', $argName, $expected, $actual));
    }

    static public function min($min, $value, $argName)
    {
        Assertion::min($value, 0, sprintf(('"%s" must be greater than %d'), $argName, $min));
    }

    static public function integer($value, $argName)
    {
        Assertion::integer($value, sprintf('"%s" must be an integer', $argName));
    }
}
