<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class StreamEventAppeared
{
    public $resolvedEvent;

    /**
     * @param ResolvedEvent $event
     */
    public function __construct(ResolvedEvent $event)
    {
        $this->resolvedEvent = $event;
    }
} 
