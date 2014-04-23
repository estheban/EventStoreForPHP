<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore;


final class EventReadStatus
{
    /**
     * The read operation was successful.
     */
    const SUCCESS = 0;

    /**
     * The event was not found.
     */
    const NOT_FOUND = 1;

    /**
     * The stream was not found.
     */
    const NO_STREAM = 2;

    /**
     * The stream previously existed but was deleted.
     */
    const STREAM_DELETED = 3;

    private $value;

    public function __construct($value)
    {
        if (!in_array($value, [self::SUCCESS, self::NOT_FOUND, self::NO_STREAM, self::STREAM_DELETED])) {
            throw new InvalidEventReadStatusException();
        }

        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
