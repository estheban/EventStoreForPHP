<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore;

use Bgy\EventStore\Utils\Uuid;

class EventData
{
    private $eventId;
    private $type;
    private $data;
    private $metadata;

    public function __construct(Uuid $eventId, $type, $data, $metadata)
    {
        $this->eventId  = $eventId;
        $this->type     = $type;
        $this->data     = $data;
        $this->metadata = $metadata;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getEventId()
    {
        return $this->eventId;
    }

    public function getMetadata()
    {
        return $this->metadata;
    }

    public function getType()
    {
        return $this->type;
    }
}
