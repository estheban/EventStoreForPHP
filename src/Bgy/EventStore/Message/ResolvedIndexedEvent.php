<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;

class ResolvedIndexedEvent
{
    public $event;
    public $link;

    /**
     * @param EventRecord      $event
     * @param EventRecord|null $link
     */
    public function __construct(EventRecord $event, EventRecord $link = null)
    {
        $this->event = $event;
        $this->link  = $link;
    }
}
