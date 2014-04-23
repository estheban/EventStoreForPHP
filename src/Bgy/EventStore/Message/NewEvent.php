<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;

class NewEvent
{
    public $eventId;
    public $eventType;
    public $dataContentType;
    public $metadataContentType;
    public $data;
    public $metadata;

    public function __construct($eventId, $eventType, $dataContentType, $metadataContentType, $data, $metadata)
    {
        $this->eventId             = $eventId;
        $this->eventType           = $eventType;
        $this->dataContentType     = $dataContentType;
        $this->metadataContentType = $metadataContentType;
        $this->data                = $data;
        $this->metadata            = $metadata;
    }
}
