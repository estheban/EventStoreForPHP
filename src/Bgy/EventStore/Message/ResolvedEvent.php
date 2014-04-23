<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;

class ResolvedEvent
{
    public $event;
    public $link;
    public $commitPosition;
    public $preparePosition;

    /**
     * @param EventRecord $event
     * @param EventRecord $link
     * @param int         $commitPosition
     * @param int         $preparePosition
     */
    public function __construct(EventRecord $event, EventRecord $link = null, $commitPosition, $preparePosition)
    {
        $this->event           = $event;
        $this->link            = $link;
        $this->commitPosition  = $commitPosition;
        $this->preparePosition = $preparePosition;
    }
}
