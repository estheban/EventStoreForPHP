<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Utils;

use Assert\Assertion as AssertBase;

class Assertion extends AssertBase
{
    protected static $exceptionClass = 'Bgy\EventStore\Utils\EnsureException';
}
