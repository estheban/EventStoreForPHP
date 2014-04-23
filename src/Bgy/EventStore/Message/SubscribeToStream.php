<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class SubscribeToStream
{
    public $eventStreamId;
    public $resolveLinkTos;

    /**
     * @param string $eventStreamId
     * @param bool   $resolveLinkTos
     */
    public function __construct($eventStreamId, $resolveLinkTos)
    {
        $this->eventStreamId  = (string) $eventStreamId;
        $this->resolveLinkTos = (bool)   $resolveLinkTos;
    }
} 
