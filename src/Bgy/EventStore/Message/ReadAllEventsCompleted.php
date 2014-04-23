<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class ReadAllEventsCompleted
{
    public $commitPosition;
    public $preparePosition;
    public $events;
    public $nextCommitPosition;
    public $nextPreparePosition;
    public $result;
    public $error;

    /**
     * @param int             $commitPosition
     * @param int             $preparePosition
     * @param ResolvedEvent[] $events
     * @param int             $nextCommitPosition
     * @param int             $nextPreparePosition
     * @param ReadAllResult   $result
     * @param null            $error
     */
    public function __construct($commitPosition, $preparePosition, array $events, $nextCommitPosition, $nextPreparePosition, ReadAllResult $result = null, $error = null)
    {
        $this->commitPosition      = (int) $commitPosition;
        $this->preparePosition     = (int) $preparePosition;
        $this->events              = $events;
        $this->nextCommitPosition  = (int) $nextCommitPosition;
        $this->nextPreparePosition = (int) $nextPreparePosition;
        $this->result              = $result;
        $this->error               = $error ? (string) $error : null;
    }
}
