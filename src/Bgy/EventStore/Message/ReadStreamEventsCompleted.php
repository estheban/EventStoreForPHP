<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class ReadStreamEventsCompleted
{
    public $events;
    public $result;
    public $nextEventNumber;
    public $lastEventNumber;
    public $isEndOfStream;
    public $lastCommitPosition;
    public $error;

    /**
     * @param ResolvedIndexedEvent[] $events
     * @param ReadStreamResult       $result
     * @param int                    $nextEventNumber
     * @param int                    $lastEventNumber
     * @param bool                   $isEndOfStream
     * @param int                    $lastCommitPosition
     * @param string|null            $error
     */
    public function __construct(array $events, ReadStreamResult $result, $nextEventNumber, $lastEventNumber, $isEndOfStream, $lastCommitPosition, $error = null)
    {
        $this->events             = $events;
        $this->result             = $result;
        $this->nextEventNumber    = (int) $nextEventNumber;
        $this->lastEventNumber    = (int) $lastEventNumber;
        $this->isEndOfStream      = (bool) $isEndOfStream;
        $this->lastCommitPosition = (int) $lastCommitPosition;
        $this->error              = $error ? (string) $error : null;
    }
}
