<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;

class EventRecord
{
    /**
     * @var string
     */
    public $eventStreamId;

    /**
     * @var int
     */
    public $eventNumber;

    /**
     * @var
     */
    public $eventId;
    public $eventType;
    public $dataContentType;
    public $metadataContentType;
    public $data;
    public $metadata;
    public $created;
    public $createdEpoch;

    public function __construct(
        $eventStreamId,
        $eventNumber,
        $eventId,
        $eventType,
        $dataContentType,
        $metadataContentType,
        $data,
        $metadata,
        $created,
        $createdEpoch
    )
    {
              $this->eventStreamId       = $eventStreamId;
              $this->eventNumber         = $eventNumber;
              $this->eventId             = $eventId;
              $this->eventType           = $eventType;
              $this->dataContentType     = $dataContentType;
              $this->metadataContentType = $metadataContentType;
              $this->data                = $data;
              $this->metadata            = $metadata;
              $this->created             = $created;
              $this->createdEpoch        = $createdEpoch;
    }
} 
