<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore;

final class ExpectedVersion
{
    /**
     * This write should not conflict with anything and should always succeed.
     */
    const ANY = -2;

    /**
     * The stream being written to should not yet exist. If it does exist treat that as a concurrency problem.
     */
    const NO_STREAM = -1;

    /**
     * The stream should exist and should be empty. If it does not exist or is not empty treat that as a concurrency problem.
     */
    const EMPTY_STREAM = -1;

    private $value;

    public function __construct($value)
    {
        if (!in_array($value, [self::ANY, self::NO_STREAM, self::EMPTY_STREAM])) {
            throw new InvalidExceptedVersionException();
        }

        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
