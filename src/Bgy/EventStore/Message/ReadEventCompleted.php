<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;

class ReadEventCompleted
{
    public $result;
    public $event;
    public $error;

    public function __construct(ReadEventResult $result, ResolvedIndexedEvent $event, $error = null)
    {
        $this->result = (string) $result;
        $this->event  = $event;
        $this->error  = (string) $error;
    }
}
