<?php
/**
 * Auto generated from ClientMessageDtos.proto at 2014-06-25 19:41:39
 *
 * EventStore.Client.Messages package
 */

namespace EventStore\Client\Messages {
/**
 * OperationResult enum
 */
final class OperationResult
{
    const Success = 0;
    const PrepareTimeout = 1;
    const CommitTimeout = 2;
    const ForwardTimeout = 3;
    const WrongExpectedVersion = 4;
    const StreamDeleted = 5;
    const InvalidTransaction = 6;
    const AccessDenied = 7;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Success' => self::Success,
            'PrepareTimeout' => self::PrepareTimeout,
            'CommitTimeout' => self::CommitTimeout,
            'ForwardTimeout' => self::ForwardTimeout,
            'WrongExpectedVersion' => self::WrongExpectedVersion,
            'StreamDeleted' => self::StreamDeleted,
            'InvalidTransaction' => self::InvalidTransaction,
            'AccessDenied' => self::AccessDenied,
        );
    }
}
}

namespace EventStore\Client\Messages {
/**
 * NewEvent message
 */
class NewEvent extends \ProtobufMessage
{
    /* Field index constants */
    const EVENT_ID = 1;
    const EVENT_TYPE = 2;
    const DATA_CONTENT_TYPE = 3;
    const METADATA_CONTENT_TYPE = 4;
    const DATA = 5;
    const METADATA = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENT_ID => array(
            'name' => 'event_id',
            'required' => true,
            'type' => 7,
        ),
        self::EVENT_TYPE => array(
            'name' => 'event_type',
            'required' => true,
            'type' => 7,
        ),
        self::DATA_CONTENT_TYPE => array(
            'name' => 'data_content_type',
            'required' => true,
            'type' => 5,
        ),
        self::METADATA_CONTENT_TYPE => array(
            'name' => 'metadata_content_type',
            'required' => true,
            'type' => 5,
        ),
        self::DATA => array(
            'name' => 'data',
            'required' => true,
            'type' => 7,
        ),
        self::METADATA => array(
            'name' => 'metadata',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::EVENT_ID] = null;
        $this->values[self::EVENT_TYPE] = null;
        $this->values[self::DATA_CONTENT_TYPE] = null;
        $this->values[self::METADATA_CONTENT_TYPE] = null;
        $this->values[self::DATA] = null;
        $this->values[self::METADATA] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'event_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventId($value)
    {
        return $this->set(self::EVENT_ID, $value);
    }

    /**
     * Returns value of 'event_id' property
     *
     * @return string
     */
    public function getEventId()
    {
        return $this->get(self::EVENT_ID);
    }

    /**
     * Sets value of 'event_type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventType($value)
    {
        return $this->set(self::EVENT_TYPE, $value);
    }

    /**
     * Returns value of 'event_type' property
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->get(self::EVENT_TYPE);
    }

    /**
     * Sets value of 'data_content_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDataContentType($value)
    {
        return $this->set(self::DATA_CONTENT_TYPE, $value);
    }

    /**
     * Returns value of 'data_content_type' property
     *
     * @return int
     */
    public function getDataContentType()
    {
        return $this->get(self::DATA_CONTENT_TYPE);
    }

    /**
     * Sets value of 'metadata_content_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMetadataContentType($value)
    {
        return $this->set(self::METADATA_CONTENT_TYPE, $value);
    }

    /**
     * Returns value of 'metadata_content_type' property
     *
     * @return int
     */
    public function getMetadataContentType()
    {
        return $this->get(self::METADATA_CONTENT_TYPE);
    }

    /**
     * Sets value of 'data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setData($value)
    {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return string
     */
    public function getData()
    {
        return $this->get(self::DATA);
    }

    /**
     * Sets value of 'metadata' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMetadata($value)
    {
        return $this->set(self::METADATA, $value);
    }

    /**
     * Returns value of 'metadata' property
     *
     * @return string
     */
    public function getMetadata()
    {
        return $this->get(self::METADATA);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * EventRecord message
 */
class EventRecord extends \ProtobufMessage
{
    /* Field index constants */
    const EVENT_STREAM_ID = 1;
    const EVENT_NUMBER = 2;
    const EVENT_ID = 3;
    const EVENT_TYPE = 4;
    const DATA_CONTENT_TYPE = 5;
    const METADATA_CONTENT_TYPE = 6;
    const DATA = 7;
    const METADATA = 8;
    const CREATED = 9;
    const CREATED_EPOCH = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENT_STREAM_ID => array(
            'name' => 'event_stream_id',
            'required' => true,
            'type' => 7,
        ),
        self::EVENT_NUMBER => array(
            'name' => 'event_number',
            'required' => true,
            'type' => 5,
        ),
        self::EVENT_ID => array(
            'name' => 'event_id',
            'required' => true,
            'type' => 7,
        ),
        self::EVENT_TYPE => array(
            'name' => 'event_type',
            'required' => true,
            'type' => 7,
        ),
        self::DATA_CONTENT_TYPE => array(
            'name' => 'data_content_type',
            'required' => true,
            'type' => 5,
        ),
        self::METADATA_CONTENT_TYPE => array(
            'name' => 'metadata_content_type',
            'required' => true,
            'type' => 5,
        ),
        self::DATA => array(
            'name' => 'data',
            'required' => true,
            'type' => 7,
        ),
        self::METADATA => array(
            'name' => 'metadata',
            'required' => false,
            'type' => 7,
        ),
        self::CREATED => array(
            'name' => 'created',
            'required' => false,
            'type' => 5,
        ),
        self::CREATED_EPOCH => array(
            'name' => 'created_epoch',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::EVENT_STREAM_ID] = null;
        $this->values[self::EVENT_NUMBER] = null;
        $this->values[self::EVENT_ID] = null;
        $this->values[self::EVENT_TYPE] = null;
        $this->values[self::DATA_CONTENT_TYPE] = null;
        $this->values[self::METADATA_CONTENT_TYPE] = null;
        $this->values[self::DATA] = null;
        $this->values[self::METADATA] = null;
        $this->values[self::CREATED] = null;
        $this->values[self::CREATED_EPOCH] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'event_stream_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventStreamId($value)
    {
        return $this->set(self::EVENT_STREAM_ID, $value);
    }

    /**
     * Returns value of 'event_stream_id' property
     *
     * @return string
     */
    public function getEventStreamId()
    {
        return $this->get(self::EVENT_STREAM_ID);
    }

    /**
     * Sets value of 'event_number' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEventNumber($value)
    {
        return $this->set(self::EVENT_NUMBER, $value);
    }

    /**
     * Returns value of 'event_number' property
     *
     * @return int
     */
    public function getEventNumber()
    {
        return $this->get(self::EVENT_NUMBER);
    }

    /**
     * Sets value of 'event_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventId($value)
    {
        return $this->set(self::EVENT_ID, $value);
    }

    /**
     * Returns value of 'event_id' property
     *
     * @return string
     */
    public function getEventId()
    {
        return $this->get(self::EVENT_ID);
    }

    /**
     * Sets value of 'event_type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventType($value)
    {
        return $this->set(self::EVENT_TYPE, $value);
    }

    /**
     * Returns value of 'event_type' property
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->get(self::EVENT_TYPE);
    }

    /**
     * Sets value of 'data_content_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setDataContentType($value)
    {
        return $this->set(self::DATA_CONTENT_TYPE, $value);
    }

    /**
     * Returns value of 'data_content_type' property
     *
     * @return int
     */
    public function getDataContentType()
    {
        return $this->get(self::DATA_CONTENT_TYPE);
    }

    /**
     * Sets value of 'metadata_content_type' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMetadataContentType($value)
    {
        return $this->set(self::METADATA_CONTENT_TYPE, $value);
    }

    /**
     * Returns value of 'metadata_content_type' property
     *
     * @return int
     */
    public function getMetadataContentType()
    {
        return $this->get(self::METADATA_CONTENT_TYPE);
    }

    /**
     * Sets value of 'data' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setData($value)
    {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return string
     */
    public function getData()
    {
        return $this->get(self::DATA);
    }

    /**
     * Sets value of 'metadata' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMetadata($value)
    {
        return $this->set(self::METADATA, $value);
    }

    /**
     * Returns value of 'metadata' property
     *
     * @return string
     */
    public function getMetadata()
    {
        return $this->get(self::METADATA);
    }

    /**
     * Sets value of 'created' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCreated($value)
    {
        return $this->set(self::CREATED, $value);
    }

    /**
     * Returns value of 'created' property
     *
     * @return int
     */
    public function getCreated()
    {
        return $this->get(self::CREATED);
    }

    /**
     * Sets value of 'created_epoch' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCreatedEpoch($value)
    {
        return $this->set(self::CREATED_EPOCH, $value);
    }

    /**
     * Returns value of 'created_epoch' property
     *
     * @return int
     */
    public function getCreatedEpoch()
    {
        return $this->get(self::CREATED_EPOCH);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * ResolvedIndexedEvent message
 */
class ResolvedIndexedEvent extends \ProtobufMessage
{
    /* Field index constants */
    const EVENT = 1;
    const LINK = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENT => array(
            'name' => 'event',
            'required' => true,
            'type' => '\EventStore\Client\Messages\EventRecord'
        ),
        self::LINK => array(
            'name' => 'link',
            'required' => false,
            'type' => '\EventStore\Client\Messages\EventRecord'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::EVENT] = null;
        $this->values[self::LINK] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'event' property
     *
     * @param \EventStore\Client\Messages\EventRecord $value Property value
     *
     * @return null
     */
    public function setEvent(\EventStore\Client\Messages\EventRecord $value)
    {
        return $this->set(self::EVENT, $value);
    }

    /**
     * Returns value of 'event' property
     *
     * @return \EventStore\Client\Messages\EventRecord
     */
    public function getEvent()
    {
        return $this->get(self::EVENT);
    }

    /**
     * Sets value of 'link' property
     *
     * @param \EventStore\Client\Messages\EventRecord $value Property value
     *
     * @return null
     */
    public function setLink(\EventStore\Client\Messages\EventRecord $value)
    {
        return $this->set(self::LINK, $value);
    }

    /**
     * Returns value of 'link' property
     *
     * @return \EventStore\Client\Messages\EventRecord
     */
    public function getLink()
    {
        return $this->get(self::LINK);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * ResolvedEvent message
 */
class ResolvedEvent extends \ProtobufMessage
{
    /* Field index constants */
    const EVENT = 1;
    const LINK = 2;
    const COMMIT_POSITION = 3;
    const PREPARE_POSITION = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENT => array(
            'name' => 'event',
            'required' => true,
            'type' => '\EventStore\Client\Messages\EventRecord'
        ),
        self::LINK => array(
            'name' => 'link',
            'required' => false,
            'type' => '\EventStore\Client\Messages\EventRecord'
        ),
        self::COMMIT_POSITION => array(
            'name' => 'commit_position',
            'required' => true,
            'type' => 5,
        ),
        self::PREPARE_POSITION => array(
            'name' => 'prepare_position',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::EVENT] = null;
        $this->values[self::LINK] = null;
        $this->values[self::COMMIT_POSITION] = null;
        $this->values[self::PREPARE_POSITION] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'event' property
     *
     * @param \EventStore\Client\Messages\EventRecord $value Property value
     *
     * @return null
     */
    public function setEvent(\EventStore\Client\Messages\EventRecord $value)
    {
        return $this->set(self::EVENT, $value);
    }

    /**
     * Returns value of 'event' property
     *
     * @return \EventStore\Client\Messages\EventRecord
     */
    public function getEvent()
    {
        return $this->get(self::EVENT);
    }

    /**
     * Sets value of 'link' property
     *
     * @param \EventStore\Client\Messages\EventRecord $value Property value
     *
     * @return null
     */
    public function setLink(\EventStore\Client\Messages\EventRecord $value)
    {
        return $this->set(self::LINK, $value);
    }

    /**
     * Returns value of 'link' property
     *
     * @return \EventStore\Client\Messages\EventRecord
     */
    public function getLink()
    {
        return $this->get(self::LINK);
    }

    /**
     * Sets value of 'commit_position' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCommitPosition($value)
    {
        return $this->set(self::COMMIT_POSITION, $value);
    }

    /**
     * Returns value of 'commit_position' property
     *
     * @return int
     */
    public function getCommitPosition()
    {
        return $this->get(self::COMMIT_POSITION);
    }

    /**
     * Sets value of 'prepare_position' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPreparePosition($value)
    {
        return $this->set(self::PREPARE_POSITION, $value);
    }

    /**
     * Returns value of 'prepare_position' property
     *
     * @return int
     */
    public function getPreparePosition()
    {
        return $this->get(self::PREPARE_POSITION);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * WriteEvents message
 */
class WriteEvents extends \ProtobufMessage
{
    /* Field index constants */
    const EVENT_STREAM_ID = 1;
    const EXPECTED_VERSION = 2;
    const EVENTS = 3;
    const REQUIRE_MASTER = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENT_STREAM_ID => array(
            'name' => 'event_stream_id',
            'required' => true,
            'type' => 7,
        ),
        self::EXPECTED_VERSION => array(
            'name' => 'expected_version',
            'required' => true,
            'type' => 5,
        ),
        self::EVENTS => array(
            'name' => 'events',
            'repeated' => true,
            'type' => '\EventStore\Client\Messages\NewEvent'
        ),
        self::REQUIRE_MASTER => array(
            'name' => 'require_master',
            'required' => true,
            'type' => 8,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::EVENT_STREAM_ID] = null;
        $this->values[self::EXPECTED_VERSION] = null;
        $this->values[self::EVENTS] = array();
        $this->values[self::REQUIRE_MASTER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'event_stream_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventStreamId($value)
    {
        return $this->set(self::EVENT_STREAM_ID, $value);
    }

    /**
     * Returns value of 'event_stream_id' property
     *
     * @return string
     */
    public function getEventStreamId()
    {
        return $this->get(self::EVENT_STREAM_ID);
    }

    /**
     * Sets value of 'expected_version' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setExpectedVersion($value)
    {
        return $this->set(self::EXPECTED_VERSION, $value);
    }

    /**
     * Returns value of 'expected_version' property
     *
     * @return int
     */
    public function getExpectedVersion()
    {
        return $this->get(self::EXPECTED_VERSION);
    }

    /**
     * Appends value to 'events' list
     *
     * @param \EventStore\Client\Messages\NewEvent $value Value to append
     *
     * @return null
     */
    public function appendEvents(\EventStore\Client\Messages\NewEvent $value)
    {
        return $this->append(self::EVENTS, $value);
    }

    /**
     * Clears 'events' list
     *
     * @return null
     */
    public function clearEvents()
    {
        return $this->clear(self::EVENTS);
    }

    /**
     * Returns 'events' list
     *
     * @return \EventStore\Client\Messages\NewEvent[]
     */
    public function getEvents()
    {
        return $this->get(self::EVENTS);
    }

    /**
     * Returns 'events' iterator
     *
     * @return ArrayIterator
     */
    public function getEventsIterator()
    {
        return new \ArrayIterator($this->get(self::EVENTS));
    }

    /**
     * Returns element from 'events' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \EventStore\Client\Messages\NewEvent
     */
    public function getEventsAt($offset)
    {
        return $this->get(self::EVENTS, $offset);
    }

    /**
     * Returns count of 'events' list
     *
     * @return int
     */
    public function getEventsCount()
    {
        return $this->count(self::EVENTS);
    }

    /**
     * Sets value of 'require_master' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setRequireMaster($value)
    {
        return $this->set(self::REQUIRE_MASTER, $value);
    }

    /**
     * Returns value of 'require_master' property
     *
     * @return bool
     */
    public function getRequireMaster()
    {
        return $this->get(self::REQUIRE_MASTER);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * WriteEventsCompleted message
 */
class WriteEventsCompleted extends \ProtobufMessage
{
    /* Field index constants */
    const RESULT = 1;
    const MESSAGE = 2;
    const FIRST_EVENT_NUMBER = 3;
    const LAST_EVENT_NUMBER = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESULT => array(
            'name' => 'result',
            'required' => true,
            'type' => 5,
        ),
        self::MESSAGE => array(
            'name' => 'message',
            'required' => false,
            'type' => 7,
        ),
        self::FIRST_EVENT_NUMBER => array(
            'name' => 'first_event_number',
            'required' => true,
            'type' => 5,
        ),
        self::LAST_EVENT_NUMBER => array(
            'name' => 'last_event_number',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::RESULT] = null;
        $this->values[self::MESSAGE] = null;
        $this->values[self::FIRST_EVENT_NUMBER] = null;
        $this->values[self::LAST_EVENT_NUMBER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'result' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::RESULT, $value);
    }

    /**
     * Returns value of 'result' property
     *
     * @return int
     */
    public function getResult()
    {
        return $this->get(self::RESULT);
    }

    /**
     * Sets value of 'message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessage($value)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->get(self::MESSAGE);
    }

    /**
     * Sets value of 'first_event_number' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFirstEventNumber($value)
    {
        return $this->set(self::FIRST_EVENT_NUMBER, $value);
    }

    /**
     * Returns value of 'first_event_number' property
     *
     * @return int
     */
    public function getFirstEventNumber()
    {
        return $this->get(self::FIRST_EVENT_NUMBER);
    }

    /**
     * Sets value of 'last_event_number' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLastEventNumber($value)
    {
        return $this->set(self::LAST_EVENT_NUMBER, $value);
    }

    /**
     * Returns value of 'last_event_number' property
     *
     * @return int
     */
    public function getLastEventNumber()
    {
        return $this->get(self::LAST_EVENT_NUMBER);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * DeleteStream message
 */
class DeleteStream extends \ProtobufMessage
{
    /* Field index constants */
    const EVENT_STREAM_ID = 1;
    const EXPECTED_VERSION = 2;
    const REQUIRE_MASTER = 3;
    const HARD_DELETE = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENT_STREAM_ID => array(
            'name' => 'event_stream_id',
            'required' => true,
            'type' => 7,
        ),
        self::EXPECTED_VERSION => array(
            'name' => 'expected_version',
            'required' => true,
            'type' => 5,
        ),
        self::REQUIRE_MASTER => array(
            'name' => 'require_master',
            'required' => true,
            'type' => 8,
        ),
        self::HARD_DELETE => array(
            'name' => 'hard_delete',
            'required' => false,
            'type' => 8,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::EVENT_STREAM_ID] = null;
        $this->values[self::EXPECTED_VERSION] = null;
        $this->values[self::REQUIRE_MASTER] = null;
        $this->values[self::HARD_DELETE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'event_stream_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventStreamId($value)
    {
        return $this->set(self::EVENT_STREAM_ID, $value);
    }

    /**
     * Returns value of 'event_stream_id' property
     *
     * @return string
     */
    public function getEventStreamId()
    {
        return $this->get(self::EVENT_STREAM_ID);
    }

    /**
     * Sets value of 'expected_version' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setExpectedVersion($value)
    {
        return $this->set(self::EXPECTED_VERSION, $value);
    }

    /**
     * Returns value of 'expected_version' property
     *
     * @return int
     */
    public function getExpectedVersion()
    {
        return $this->get(self::EXPECTED_VERSION);
    }

    /**
     * Sets value of 'require_master' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setRequireMaster($value)
    {
        return $this->set(self::REQUIRE_MASTER, $value);
    }

    /**
     * Returns value of 'require_master' property
     *
     * @return bool
     */
    public function getRequireMaster()
    {
        return $this->get(self::REQUIRE_MASTER);
    }

    /**
     * Sets value of 'hard_delete' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setHardDelete($value)
    {
        return $this->set(self::HARD_DELETE, $value);
    }

    /**
     * Returns value of 'hard_delete' property
     *
     * @return bool
     */
    public function getHardDelete()
    {
        return $this->get(self::HARD_DELETE);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * DeleteStreamCompleted message
 */
class DeleteStreamCompleted extends \ProtobufMessage
{
    /* Field index constants */
    const RESULT = 1;
    const MESSAGE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESULT => array(
            'name' => 'result',
            'required' => true,
            'type' => 5,
        ),
        self::MESSAGE => array(
            'name' => 'message',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::RESULT] = null;
        $this->values[self::MESSAGE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'result' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::RESULT, $value);
    }

    /**
     * Returns value of 'result' property
     *
     * @return int
     */
    public function getResult()
    {
        return $this->get(self::RESULT);
    }

    /**
     * Sets value of 'message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessage($value)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->get(self::MESSAGE);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * TransactionStart message
 */
class TransactionStart extends \ProtobufMessage
{
    /* Field index constants */
    const EVENT_STREAM_ID = 1;
    const EXPECTED_VERSION = 2;
    const REQUIRE_MASTER = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENT_STREAM_ID => array(
            'name' => 'event_stream_id',
            'required' => true,
            'type' => 7,
        ),
        self::EXPECTED_VERSION => array(
            'name' => 'expected_version',
            'required' => true,
            'type' => 5,
        ),
        self::REQUIRE_MASTER => array(
            'name' => 'require_master',
            'required' => true,
            'type' => 8,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::EVENT_STREAM_ID] = null;
        $this->values[self::EXPECTED_VERSION] = null;
        $this->values[self::REQUIRE_MASTER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'event_stream_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventStreamId($value)
    {
        return $this->set(self::EVENT_STREAM_ID, $value);
    }

    /**
     * Returns value of 'event_stream_id' property
     *
     * @return string
     */
    public function getEventStreamId()
    {
        return $this->get(self::EVENT_STREAM_ID);
    }

    /**
     * Sets value of 'expected_version' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setExpectedVersion($value)
    {
        return $this->set(self::EXPECTED_VERSION, $value);
    }

    /**
     * Returns value of 'expected_version' property
     *
     * @return int
     */
    public function getExpectedVersion()
    {
        return $this->get(self::EXPECTED_VERSION);
    }

    /**
     * Sets value of 'require_master' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setRequireMaster($value)
    {
        return $this->set(self::REQUIRE_MASTER, $value);
    }

    /**
     * Returns value of 'require_master' property
     *
     * @return bool
     */
    public function getRequireMaster()
    {
        return $this->get(self::REQUIRE_MASTER);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * TransactionStartCompleted message
 */
class TransactionStartCompleted extends \ProtobufMessage
{
    /* Field index constants */
    const TRANSACTION_ID = 1;
    const RESULT = 2;
    const MESSAGE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TRANSACTION_ID => array(
            'name' => 'transaction_id',
            'required' => true,
            'type' => 5,
        ),
        self::RESULT => array(
            'name' => 'result',
            'required' => true,
            'type' => 5,
        ),
        self::MESSAGE => array(
            'name' => 'message',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TRANSACTION_ID] = null;
        $this->values[self::RESULT] = null;
        $this->values[self::MESSAGE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'transaction_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTransactionId($value)
    {
        return $this->set(self::TRANSACTION_ID, $value);
    }

    /**
     * Returns value of 'transaction_id' property
     *
     * @return int
     */
    public function getTransactionId()
    {
        return $this->get(self::TRANSACTION_ID);
    }

    /**
     * Sets value of 'result' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::RESULT, $value);
    }

    /**
     * Returns value of 'result' property
     *
     * @return int
     */
    public function getResult()
    {
        return $this->get(self::RESULT);
    }

    /**
     * Sets value of 'message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessage($value)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->get(self::MESSAGE);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * TransactionWrite message
 */
class TransactionWrite extends \ProtobufMessage
{
    /* Field index constants */
    const TRANSACTION_ID = 1;
    const EVENTS = 2;
    const REQUIRE_MASTER = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TRANSACTION_ID => array(
            'name' => 'transaction_id',
            'required' => true,
            'type' => 5,
        ),
        self::EVENTS => array(
            'name' => 'events',
            'repeated' => true,
            'type' => '\EventStore\Client\Messages\NewEvent'
        ),
        self::REQUIRE_MASTER => array(
            'name' => 'require_master',
            'required' => true,
            'type' => 8,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TRANSACTION_ID] = null;
        $this->values[self::EVENTS] = array();
        $this->values[self::REQUIRE_MASTER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'transaction_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTransactionId($value)
    {
        return $this->set(self::TRANSACTION_ID, $value);
    }

    /**
     * Returns value of 'transaction_id' property
     *
     * @return int
     */
    public function getTransactionId()
    {
        return $this->get(self::TRANSACTION_ID);
    }

    /**
     * Appends value to 'events' list
     *
     * @param \EventStore\Client\Messages\NewEvent $value Value to append
     *
     * @return null
     */
    public function appendEvents(\EventStore\Client\Messages\NewEvent $value)
    {
        return $this->append(self::EVENTS, $value);
    }

    /**
     * Clears 'events' list
     *
     * @return null
     */
    public function clearEvents()
    {
        return $this->clear(self::EVENTS);
    }

    /**
     * Returns 'events' list
     *
     * @return \EventStore\Client\Messages\NewEvent[]
     */
    public function getEvents()
    {
        return $this->get(self::EVENTS);
    }

    /**
     * Returns 'events' iterator
     *
     * @return ArrayIterator
     */
    public function getEventsIterator()
    {
        return new \ArrayIterator($this->get(self::EVENTS));
    }

    /**
     * Returns element from 'events' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \EventStore\Client\Messages\NewEvent
     */
    public function getEventsAt($offset)
    {
        return $this->get(self::EVENTS, $offset);
    }

    /**
     * Returns count of 'events' list
     *
     * @return int
     */
    public function getEventsCount()
    {
        return $this->count(self::EVENTS);
    }

    /**
     * Sets value of 'require_master' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setRequireMaster($value)
    {
        return $this->set(self::REQUIRE_MASTER, $value);
    }

    /**
     * Returns value of 'require_master' property
     *
     * @return bool
     */
    public function getRequireMaster()
    {
        return $this->get(self::REQUIRE_MASTER);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * TransactionWriteCompleted message
 */
class TransactionWriteCompleted extends \ProtobufMessage
{
    /* Field index constants */
    const TRANSACTION_ID = 1;
    const RESULT = 2;
    const MESSAGE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TRANSACTION_ID => array(
            'name' => 'transaction_id',
            'required' => true,
            'type' => 5,
        ),
        self::RESULT => array(
            'name' => 'result',
            'required' => true,
            'type' => 5,
        ),
        self::MESSAGE => array(
            'name' => 'message',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TRANSACTION_ID] = null;
        $this->values[self::RESULT] = null;
        $this->values[self::MESSAGE] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'transaction_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTransactionId($value)
    {
        return $this->set(self::TRANSACTION_ID, $value);
    }

    /**
     * Returns value of 'transaction_id' property
     *
     * @return int
     */
    public function getTransactionId()
    {
        return $this->get(self::TRANSACTION_ID);
    }

    /**
     * Sets value of 'result' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::RESULT, $value);
    }

    /**
     * Returns value of 'result' property
     *
     * @return int
     */
    public function getResult()
    {
        return $this->get(self::RESULT);
    }

    /**
     * Sets value of 'message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessage($value)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->get(self::MESSAGE);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * TransactionCommit message
 */
class TransactionCommit extends \ProtobufMessage
{
    /* Field index constants */
    const TRANSACTION_ID = 1;
    const REQUIRE_MASTER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TRANSACTION_ID => array(
            'name' => 'transaction_id',
            'required' => true,
            'type' => 5,
        ),
        self::REQUIRE_MASTER => array(
            'name' => 'require_master',
            'required' => true,
            'type' => 8,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TRANSACTION_ID] = null;
        $this->values[self::REQUIRE_MASTER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'transaction_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTransactionId($value)
    {
        return $this->set(self::TRANSACTION_ID, $value);
    }

    /**
     * Returns value of 'transaction_id' property
     *
     * @return int
     */
    public function getTransactionId()
    {
        return $this->get(self::TRANSACTION_ID);
    }

    /**
     * Sets value of 'require_master' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setRequireMaster($value)
    {
        return $this->set(self::REQUIRE_MASTER, $value);
    }

    /**
     * Returns value of 'require_master' property
     *
     * @return bool
     */
    public function getRequireMaster()
    {
        return $this->get(self::REQUIRE_MASTER);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * TransactionCommitCompleted message
 */
class TransactionCommitCompleted extends \ProtobufMessage
{
    /* Field index constants */
    const TRANSACTION_ID = 1;
    const RESULT = 2;
    const MESSAGE = 3;
    const FIRST_EVENT_NUMBER = 4;
    const LAST_EVENT_NUMBER = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TRANSACTION_ID => array(
            'name' => 'transaction_id',
            'required' => true,
            'type' => 5,
        ),
        self::RESULT => array(
            'name' => 'result',
            'required' => true,
            'type' => 5,
        ),
        self::MESSAGE => array(
            'name' => 'message',
            'required' => false,
            'type' => 7,
        ),
        self::FIRST_EVENT_NUMBER => array(
            'name' => 'first_event_number',
            'required' => true,
            'type' => 5,
        ),
        self::LAST_EVENT_NUMBER => array(
            'name' => 'last_event_number',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::TRANSACTION_ID] = null;
        $this->values[self::RESULT] = null;
        $this->values[self::MESSAGE] = null;
        $this->values[self::FIRST_EVENT_NUMBER] = null;
        $this->values[self::LAST_EVENT_NUMBER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'transaction_id' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTransactionId($value)
    {
        return $this->set(self::TRANSACTION_ID, $value);
    }

    /**
     * Returns value of 'transaction_id' property
     *
     * @return int
     */
    public function getTransactionId()
    {
        return $this->get(self::TRANSACTION_ID);
    }

    /**
     * Sets value of 'result' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::RESULT, $value);
    }

    /**
     * Returns value of 'result' property
     *
     * @return int
     */
    public function getResult()
    {
        return $this->get(self::RESULT);
    }

    /**
     * Sets value of 'message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessage($value)
    {
        return $this->set(self::MESSAGE, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->get(self::MESSAGE);
    }

    /**
     * Sets value of 'first_event_number' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFirstEventNumber($value)
    {
        return $this->set(self::FIRST_EVENT_NUMBER, $value);
    }

    /**
     * Returns value of 'first_event_number' property
     *
     * @return int
     */
    public function getFirstEventNumber()
    {
        return $this->get(self::FIRST_EVENT_NUMBER);
    }

    /**
     * Sets value of 'last_event_number' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLastEventNumber($value)
    {
        return $this->set(self::LAST_EVENT_NUMBER, $value);
    }

    /**
     * Returns value of 'last_event_number' property
     *
     * @return int
     */
    public function getLastEventNumber()
    {
        return $this->get(self::LAST_EVENT_NUMBER);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * ReadEvent message
 */
class ReadEvent extends \ProtobufMessage
{
    /* Field index constants */
    const EVENT_STREAM_ID = 1;
    const EVENT_NUMBER = 2;
    const RESOLVE_LINK_TOS = 3;
    const REQUIRE_MASTER = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENT_STREAM_ID => array(
            'name' => 'event_stream_id',
            'required' => true,
            'type' => 7,
        ),
        self::EVENT_NUMBER => array(
            'name' => 'event_number',
            'required' => true,
            'type' => 5,
        ),
        self::RESOLVE_LINK_TOS => array(
            'name' => 'resolve_link_tos',
            'required' => true,
            'type' => 8,
        ),
        self::REQUIRE_MASTER => array(
            'name' => 'require_master',
            'required' => true,
            'type' => 8,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::EVENT_STREAM_ID] = null;
        $this->values[self::EVENT_NUMBER] = null;
        $this->values[self::RESOLVE_LINK_TOS] = null;
        $this->values[self::REQUIRE_MASTER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'event_stream_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventStreamId($value)
    {
        return $this->set(self::EVENT_STREAM_ID, $value);
    }

    /**
     * Returns value of 'event_stream_id' property
     *
     * @return string
     */
    public function getEventStreamId()
    {
        return $this->get(self::EVENT_STREAM_ID);
    }

    /**
     * Sets value of 'event_number' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setEventNumber($value)
    {
        return $this->set(self::EVENT_NUMBER, $value);
    }

    /**
     * Returns value of 'event_number' property
     *
     * @return int
     */
    public function getEventNumber()
    {
        return $this->get(self::EVENT_NUMBER);
    }

    /**
     * Sets value of 'resolve_link_tos' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setResolveLinkTos($value)
    {
        return $this->set(self::RESOLVE_LINK_TOS, $value);
    }

    /**
     * Returns value of 'resolve_link_tos' property
     *
     * @return bool
     */
    public function getResolveLinkTos()
    {
        return $this->get(self::RESOLVE_LINK_TOS);
    }

    /**
     * Sets value of 'require_master' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setRequireMaster($value)
    {
        return $this->set(self::REQUIRE_MASTER, $value);
    }

    /**
     * Returns value of 'require_master' property
     *
     * @return bool
     */
    public function getRequireMaster()
    {
        return $this->get(self::REQUIRE_MASTER);
    }
}
}

namespace EventStore\Client\Messages\ReadEventCompleted {
/**
 * ReadEventResult enum embedded in ReadEventCompleted message
 */
final class ReadEventResult
{
    const Success = 0;
    const NotFound = 1;
    const NoStream = 2;
    const StreamDeleted = 3;
    const Error = 4;
    const AccessDenied = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Success' => self::Success,
            'NotFound' => self::NotFound,
            'NoStream' => self::NoStream,
            'StreamDeleted' => self::StreamDeleted,
            'Error' => self::Error,
            'AccessDenied' => self::AccessDenied,
        );
    }
}
}

namespace EventStore\Client\Messages {
/**
 * ReadEventCompleted message
 */
class ReadEventCompleted extends \ProtobufMessage
{
    /* Field index constants */
    const RESULT = 1;
    const EVENT = 2;
    const ERROR = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESULT => array(
            'name' => 'result',
            'required' => true,
            'type' => 5,
        ),
        self::EVENT => array(
            'name' => 'event',
            'required' => true,
            'type' => '\EventStore\Client\Messages\ResolvedIndexedEvent'
        ),
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::RESULT] = null;
        $this->values[self::EVENT] = null;
        $this->values[self::ERROR] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'result' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::RESULT, $value);
    }

    /**
     * Returns value of 'result' property
     *
     * @return int
     */
    public function getResult()
    {
        return $this->get(self::RESULT);
    }

    /**
     * Sets value of 'event' property
     *
     * @param \EventStore\Client\Messages\ResolvedIndexedEvent $value Property value
     *
     * @return null
     */
    public function setEvent(\EventStore\Client\Messages\ResolvedIndexedEvent $value)
    {
        return $this->set(self::EVENT, $value);
    }

    /**
     * Returns value of 'event' property
     *
     * @return \EventStore\Client\Messages\ResolvedIndexedEvent
     */
    public function getEvent()
    {
        return $this->get(self::EVENT);
    }

    /**
     * Sets value of 'error' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setError($value)
    {
        return $this->set(self::ERROR, $value);
    }

    /**
     * Returns value of 'error' property
     *
     * @return string
     */
    public function getError()
    {
        return $this->get(self::ERROR);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * ReadStreamEvents message
 */
class ReadStreamEvents extends \ProtobufMessage
{
    /* Field index constants */
    const EVENT_STREAM_ID = 1;
    const FROM_EVENT_NUMBER = 2;
    const MAX_COUNT = 3;
    const RESOLVE_LINK_TOS = 4;
    const REQUIRE_MASTER = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENT_STREAM_ID => array(
            'name' => 'event_stream_id',
            'required' => true,
            'type' => 7,
        ),
        self::FROM_EVENT_NUMBER => array(
            'name' => 'from_event_number',
            'required' => true,
            'type' => 5,
        ),
        self::MAX_COUNT => array(
            'name' => 'max_count',
            'required' => true,
            'type' => 5,
        ),
        self::RESOLVE_LINK_TOS => array(
            'name' => 'resolve_link_tos',
            'required' => true,
            'type' => 8,
        ),
        self::REQUIRE_MASTER => array(
            'name' => 'require_master',
            'required' => true,
            'type' => 8,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::EVENT_STREAM_ID] = null;
        $this->values[self::FROM_EVENT_NUMBER] = null;
        $this->values[self::MAX_COUNT] = null;
        $this->values[self::RESOLVE_LINK_TOS] = null;
        $this->values[self::REQUIRE_MASTER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'event_stream_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventStreamId($value)
    {
        return $this->set(self::EVENT_STREAM_ID, $value);
    }

    /**
     * Returns value of 'event_stream_id' property
     *
     * @return string
     */
    public function getEventStreamId()
    {
        return $this->get(self::EVENT_STREAM_ID);
    }

    /**
     * Sets value of 'from_event_number' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFromEventNumber($value)
    {
        return $this->set(self::FROM_EVENT_NUMBER, $value);
    }

    /**
     * Returns value of 'from_event_number' property
     *
     * @return int
     */
    public function getFromEventNumber()
    {
        return $this->get(self::FROM_EVENT_NUMBER);
    }

    /**
     * Sets value of 'max_count' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMaxCount($value)
    {
        return $this->set(self::MAX_COUNT, $value);
    }

    /**
     * Returns value of 'max_count' property
     *
     * @return int
     */
    public function getMaxCount()
    {
        return $this->get(self::MAX_COUNT);
    }

    /**
     * Sets value of 'resolve_link_tos' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setResolveLinkTos($value)
    {
        return $this->set(self::RESOLVE_LINK_TOS, $value);
    }

    /**
     * Returns value of 'resolve_link_tos' property
     *
     * @return bool
     */
    public function getResolveLinkTos()
    {
        return $this->get(self::RESOLVE_LINK_TOS);
    }

    /**
     * Sets value of 'require_master' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setRequireMaster($value)
    {
        return $this->set(self::REQUIRE_MASTER, $value);
    }

    /**
     * Returns value of 'require_master' property
     *
     * @return bool
     */
    public function getRequireMaster()
    {
        return $this->get(self::REQUIRE_MASTER);
    }
}
}

namespace EventStore\Client\Messages\ReadStreamEventsCompleted {
/**
 * ReadStreamResult enum embedded in ReadStreamEventsCompleted message
 */
final class ReadStreamResult
{
    const Success = 0;
    const NoStream = 1;
    const StreamDeleted = 2;
    const NotModified = 3;
    const Error = 4;
    const AccessDenied = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Success' => self::Success,
            'NoStream' => self::NoStream,
            'StreamDeleted' => self::StreamDeleted,
            'NotModified' => self::NotModified,
            'Error' => self::Error,
            'AccessDenied' => self::AccessDenied,
        );
    }
}
}

namespace EventStore\Client\Messages {
/**
 * ReadStreamEventsCompleted message
 */
class ReadStreamEventsCompleted extends \ProtobufMessage
{
    /* Field index constants */
    const EVENTS = 1;
    const RESULT = 2;
    const NEXT_EVENT_NUMBER = 3;
    const LAST_EVENT_NUMBER = 4;
    const IS_END_OF_STREAM = 5;
    const LAST_COMMIT_POSITION = 6;
    const ERROR = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENTS => array(
            'name' => 'events',
            'repeated' => true,
            'type' => '\EventStore\Client\Messages\ResolvedIndexedEvent'
        ),
        self::RESULT => array(
            'name' => 'result',
            'required' => true,
            'type' => 5,
        ),
        self::NEXT_EVENT_NUMBER => array(
            'name' => 'next_event_number',
            'required' => true,
            'type' => 5,
        ),
        self::LAST_EVENT_NUMBER => array(
            'name' => 'last_event_number',
            'required' => true,
            'type' => 5,
        ),
        self::IS_END_OF_STREAM => array(
            'name' => 'is_end_of_stream',
            'required' => true,
            'type' => 8,
        ),
        self::LAST_COMMIT_POSITION => array(
            'name' => 'last_commit_position',
            'required' => true,
            'type' => 5,
        ),
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::EVENTS] = array();
        $this->values[self::RESULT] = null;
        $this->values[self::NEXT_EVENT_NUMBER] = null;
        $this->values[self::LAST_EVENT_NUMBER] = null;
        $this->values[self::IS_END_OF_STREAM] = null;
        $this->values[self::LAST_COMMIT_POSITION] = null;
        $this->values[self::ERROR] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Appends value to 'events' list
     *
     * @param \EventStore\Client\Messages\ResolvedIndexedEvent $value Value to append
     *
     * @return null
     */
    public function appendEvents(\EventStore\Client\Messages\ResolvedIndexedEvent $value)
    {
        return $this->append(self::EVENTS, $value);
    }

    /**
     * Clears 'events' list
     *
     * @return null
     */
    public function clearEvents()
    {
        return $this->clear(self::EVENTS);
    }

    /**
     * Returns 'events' list
     *
     * @return \EventStore\Client\Messages\ResolvedIndexedEvent[]
     */
    public function getEvents()
    {
        return $this->get(self::EVENTS);
    }

    /**
     * Returns 'events' iterator
     *
     * @return ArrayIterator
     */
    public function getEventsIterator()
    {
        return new \ArrayIterator($this->get(self::EVENTS));
    }

    /**
     * Returns element from 'events' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \EventStore\Client\Messages\ResolvedIndexedEvent
     */
    public function getEventsAt($offset)
    {
        return $this->get(self::EVENTS, $offset);
    }

    /**
     * Returns count of 'events' list
     *
     * @return int
     */
    public function getEventsCount()
    {
        return $this->count(self::EVENTS);
    }

    /**
     * Sets value of 'result' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::RESULT, $value);
    }

    /**
     * Returns value of 'result' property
     *
     * @return int
     */
    public function getResult()
    {
        return $this->get(self::RESULT);
    }

    /**
     * Sets value of 'next_event_number' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNextEventNumber($value)
    {
        return $this->set(self::NEXT_EVENT_NUMBER, $value);
    }

    /**
     * Returns value of 'next_event_number' property
     *
     * @return int
     */
    public function getNextEventNumber()
    {
        return $this->get(self::NEXT_EVENT_NUMBER);
    }

    /**
     * Sets value of 'last_event_number' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLastEventNumber($value)
    {
        return $this->set(self::LAST_EVENT_NUMBER, $value);
    }

    /**
     * Returns value of 'last_event_number' property
     *
     * @return int
     */
    public function getLastEventNumber()
    {
        return $this->get(self::LAST_EVENT_NUMBER);
    }

    /**
     * Sets value of 'is_end_of_stream' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setIsEndOfStream($value)
    {
        return $this->set(self::IS_END_OF_STREAM, $value);
    }

    /**
     * Returns value of 'is_end_of_stream' property
     *
     * @return bool
     */
    public function getIsEndOfStream()
    {
        return $this->get(self::IS_END_OF_STREAM);
    }

    /**
     * Sets value of 'last_commit_position' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLastCommitPosition($value)
    {
        return $this->set(self::LAST_COMMIT_POSITION, $value);
    }

    /**
     * Returns value of 'last_commit_position' property
     *
     * @return int
     */
    public function getLastCommitPosition()
    {
        return $this->get(self::LAST_COMMIT_POSITION);
    }

    /**
     * Sets value of 'error' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setError($value)
    {
        return $this->set(self::ERROR, $value);
    }

    /**
     * Returns value of 'error' property
     *
     * @return string
     */
    public function getError()
    {
        return $this->get(self::ERROR);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * ReadAllEvents message
 */
class ReadAllEvents extends \ProtobufMessage
{
    /* Field index constants */
    const COMMIT_POSITION = 1;
    const PREPARE_POSITION = 2;
    const MAX_COUNT = 3;
    const RESOLVE_LINK_TOS = 4;
    const REQUIRE_MASTER = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COMMIT_POSITION => array(
            'name' => 'commit_position',
            'required' => true,
            'type' => 5,
        ),
        self::PREPARE_POSITION => array(
            'name' => 'prepare_position',
            'required' => true,
            'type' => 5,
        ),
        self::MAX_COUNT => array(
            'name' => 'max_count',
            'required' => true,
            'type' => 5,
        ),
        self::RESOLVE_LINK_TOS => array(
            'name' => 'resolve_link_tos',
            'required' => true,
            'type' => 8,
        ),
        self::REQUIRE_MASTER => array(
            'name' => 'require_master',
            'required' => true,
            'type' => 8,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::COMMIT_POSITION] = null;
        $this->values[self::PREPARE_POSITION] = null;
        $this->values[self::MAX_COUNT] = null;
        $this->values[self::RESOLVE_LINK_TOS] = null;
        $this->values[self::REQUIRE_MASTER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'commit_position' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCommitPosition($value)
    {
        return $this->set(self::COMMIT_POSITION, $value);
    }

    /**
     * Returns value of 'commit_position' property
     *
     * @return int
     */
    public function getCommitPosition()
    {
        return $this->get(self::COMMIT_POSITION);
    }

    /**
     * Sets value of 'prepare_position' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPreparePosition($value)
    {
        return $this->set(self::PREPARE_POSITION, $value);
    }

    /**
     * Returns value of 'prepare_position' property
     *
     * @return int
     */
    public function getPreparePosition()
    {
        return $this->get(self::PREPARE_POSITION);
    }

    /**
     * Sets value of 'max_count' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setMaxCount($value)
    {
        return $this->set(self::MAX_COUNT, $value);
    }

    /**
     * Returns value of 'max_count' property
     *
     * @return int
     */
    public function getMaxCount()
    {
        return $this->get(self::MAX_COUNT);
    }

    /**
     * Sets value of 'resolve_link_tos' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setResolveLinkTos($value)
    {
        return $this->set(self::RESOLVE_LINK_TOS, $value);
    }

    /**
     * Returns value of 'resolve_link_tos' property
     *
     * @return bool
     */
    public function getResolveLinkTos()
    {
        return $this->get(self::RESOLVE_LINK_TOS);
    }

    /**
     * Sets value of 'require_master' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setRequireMaster($value)
    {
        return $this->set(self::REQUIRE_MASTER, $value);
    }

    /**
     * Returns value of 'require_master' property
     *
     * @return bool
     */
    public function getRequireMaster()
    {
        return $this->get(self::REQUIRE_MASTER);
    }
}
}

namespace EventStore\Client\Messages\ReadAllEventsCompleted {
/**
 * ReadAllResult enum embedded in ReadAllEventsCompleted message
 */
final class ReadAllResult
{
    const Success = 0;
    const NotModified = 1;
    const Error = 2;
    const AccessDenied = 3;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Success' => self::Success,
            'NotModified' => self::NotModified,
            'Error' => self::Error,
            'AccessDenied' => self::AccessDenied,
        );
    }
}
}

namespace EventStore\Client\Messages {
/**
 * ReadAllEventsCompleted message
 */
class ReadAllEventsCompleted extends \ProtobufMessage
{
    /* Field index constants */
    const COMMIT_POSITION = 1;
    const PREPARE_POSITION = 2;
    const EVENTS = 3;
    const NEXT_COMMIT_POSITION = 4;
    const NEXT_PREPARE_POSITION = 5;
    const RESULT = 6;
    const ERROR = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COMMIT_POSITION => array(
            'name' => 'commit_position',
            'required' => true,
            'type' => 5,
        ),
        self::PREPARE_POSITION => array(
            'name' => 'prepare_position',
            'required' => true,
            'type' => 5,
        ),
        self::EVENTS => array(
            'name' => 'events',
            'repeated' => true,
            'type' => '\EventStore\Client\Messages\ResolvedEvent'
        ),
        self::NEXT_COMMIT_POSITION => array(
            'name' => 'next_commit_position',
            'required' => true,
            'type' => 5,
        ),
        self::NEXT_PREPARE_POSITION => array(
            'name' => 'next_prepare_position',
            'required' => true,
            'type' => 5,
        ),
        self::RESULT => array(
            'default' => \EventStore\Client\Messages\ReadAllEventsCompleted\ReadAllResult::Success, 
            'name' => 'result',
            'required' => false,
            'type' => 5,
        ),
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::COMMIT_POSITION] = null;
        $this->values[self::PREPARE_POSITION] = null;
        $this->values[self::EVENTS] = array();
        $this->values[self::NEXT_COMMIT_POSITION] = null;
        $this->values[self::NEXT_PREPARE_POSITION] = null;
        $this->values[self::RESULT] = \EventStore\Client\Messages\ReadAllEventsCompleted\ReadAllResult::Success;
        $this->values[self::ERROR] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'commit_position' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setCommitPosition($value)
    {
        return $this->set(self::COMMIT_POSITION, $value);
    }

    /**
     * Returns value of 'commit_position' property
     *
     * @return int
     */
    public function getCommitPosition()
    {
        return $this->get(self::COMMIT_POSITION);
    }

    /**
     * Sets value of 'prepare_position' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPreparePosition($value)
    {
        return $this->set(self::PREPARE_POSITION, $value);
    }

    /**
     * Returns value of 'prepare_position' property
     *
     * @return int
     */
    public function getPreparePosition()
    {
        return $this->get(self::PREPARE_POSITION);
    }

    /**
     * Appends value to 'events' list
     *
     * @param \EventStore\Client\Messages\ResolvedEvent $value Value to append
     *
     * @return null
     */
    public function appendEvents(\EventStore\Client\Messages\ResolvedEvent $value)
    {
        return $this->append(self::EVENTS, $value);
    }

    /**
     * Clears 'events' list
     *
     * @return null
     */
    public function clearEvents()
    {
        return $this->clear(self::EVENTS);
    }

    /**
     * Returns 'events' list
     *
     * @return \EventStore\Client\Messages\ResolvedEvent[]
     */
    public function getEvents()
    {
        return $this->get(self::EVENTS);
    }

    /**
     * Returns 'events' iterator
     *
     * @return ArrayIterator
     */
    public function getEventsIterator()
    {
        return new \ArrayIterator($this->get(self::EVENTS));
    }

    /**
     * Returns element from 'events' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \EventStore\Client\Messages\ResolvedEvent
     */
    public function getEventsAt($offset)
    {
        return $this->get(self::EVENTS, $offset);
    }

    /**
     * Returns count of 'events' list
     *
     * @return int
     */
    public function getEventsCount()
    {
        return $this->count(self::EVENTS);
    }

    /**
     * Sets value of 'next_commit_position' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNextCommitPosition($value)
    {
        return $this->set(self::NEXT_COMMIT_POSITION, $value);
    }

    /**
     * Returns value of 'next_commit_position' property
     *
     * @return int
     */
    public function getNextCommitPosition()
    {
        return $this->get(self::NEXT_COMMIT_POSITION);
    }

    /**
     * Sets value of 'next_prepare_position' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNextPreparePosition($value)
    {
        return $this->set(self::NEXT_PREPARE_POSITION, $value);
    }

    /**
     * Returns value of 'next_prepare_position' property
     *
     * @return int
     */
    public function getNextPreparePosition()
    {
        return $this->get(self::NEXT_PREPARE_POSITION);
    }

    /**
     * Sets value of 'result' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::RESULT, $value);
    }

    /**
     * Returns value of 'result' property
     *
     * @return int
     */
    public function getResult()
    {
        return $this->get(self::RESULT);
    }

    /**
     * Sets value of 'error' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setError($value)
    {
        return $this->set(self::ERROR, $value);
    }

    /**
     * Returns value of 'error' property
     *
     * @return string
     */
    public function getError()
    {
        return $this->get(self::ERROR);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * SubscribeToStream message
 */
class SubscribeToStream extends \ProtobufMessage
{
    /* Field index constants */
    const EVENT_STREAM_ID = 1;
    const RESOLVE_LINK_TOS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENT_STREAM_ID => array(
            'name' => 'event_stream_id',
            'required' => true,
            'type' => 7,
        ),
        self::RESOLVE_LINK_TOS => array(
            'name' => 'resolve_link_tos',
            'required' => true,
            'type' => 8,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::EVENT_STREAM_ID] = null;
        $this->values[self::RESOLVE_LINK_TOS] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'event_stream_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEventStreamId($value)
    {
        return $this->set(self::EVENT_STREAM_ID, $value);
    }

    /**
     * Returns value of 'event_stream_id' property
     *
     * @return string
     */
    public function getEventStreamId()
    {
        return $this->get(self::EVENT_STREAM_ID);
    }

    /**
     * Sets value of 'resolve_link_tos' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setResolveLinkTos($value)
    {
        return $this->set(self::RESOLVE_LINK_TOS, $value);
    }

    /**
     * Returns value of 'resolve_link_tos' property
     *
     * @return bool
     */
    public function getResolveLinkTos()
    {
        return $this->get(self::RESOLVE_LINK_TOS);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * SubscriptionConfirmation message
 */
class SubscriptionConfirmation extends \ProtobufMessage
{
    /* Field index constants */
    const LAST_COMMIT_POSITION = 1;
    const LAST_EVENT_NUMBER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LAST_COMMIT_POSITION => array(
            'name' => 'last_commit_position',
            'required' => true,
            'type' => 5,
        ),
        self::LAST_EVENT_NUMBER => array(
            'name' => 'last_event_number',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::LAST_COMMIT_POSITION] = null;
        $this->values[self::LAST_EVENT_NUMBER] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'last_commit_position' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLastCommitPosition($value)
    {
        return $this->set(self::LAST_COMMIT_POSITION, $value);
    }

    /**
     * Returns value of 'last_commit_position' property
     *
     * @return int
     */
    public function getLastCommitPosition()
    {
        return $this->get(self::LAST_COMMIT_POSITION);
    }

    /**
     * Sets value of 'last_event_number' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setLastEventNumber($value)
    {
        return $this->set(self::LAST_EVENT_NUMBER, $value);
    }

    /**
     * Returns value of 'last_event_number' property
     *
     * @return int
     */
    public function getLastEventNumber()
    {
        return $this->get(self::LAST_EVENT_NUMBER);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * StreamEventAppeared message
 */
class StreamEventAppeared extends \ProtobufMessage
{
    /* Field index constants */
    const EVENT = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EVENT => array(
            'name' => 'event',
            'required' => true,
            'type' => '\EventStore\Client\Messages\ResolvedEvent'
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::EVENT] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'event' property
     *
     * @param \EventStore\Client\Messages\ResolvedEvent $value Property value
     *
     * @return null
     */
    public function setEvent(\EventStore\Client\Messages\ResolvedEvent $value)
    {
        return $this->set(self::EVENT, $value);
    }

    /**
     * Returns value of 'event' property
     *
     * @return \EventStore\Client\Messages\ResolvedEvent
     */
    public function getEvent()
    {
        return $this->get(self::EVENT);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * UnsubscribeFromStream message
 */
class UnsubscribeFromStream extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }
}
}

namespace EventStore\Client\Messages\SubscriptionDropped {
/**
 * SubscriptionDropReason enum embedded in SubscriptionDropped message
 */
final class SubscriptionDropReason
{
    const Unsubscribed = 0;
    const AccessDenied = 1;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Unsubscribed' => self::Unsubscribed,
            'AccessDenied' => self::AccessDenied,
        );
    }
}
}

namespace EventStore\Client\Messages {
/**
 * SubscriptionDropped message
 */
class SubscriptionDropped extends \ProtobufMessage
{
    /* Field index constants */
    const REASON = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REASON => array(
            'default' => \EventStore\Client\Messages\SubscriptionDropped\SubscriptionDropReason::Unsubscribed, 
            'name' => 'reason',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::REASON] = \EventStore\Client\Messages\SubscriptionDropped\SubscriptionDropReason::Unsubscribed;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'reason' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setReason($value)
    {
        return $this->set(self::REASON, $value);
    }

    /**
     * Returns value of 'reason' property
     *
     * @return int
     */
    public function getReason()
    {
        return $this->get(self::REASON);
    }
}
}

namespace EventStore\Client\Messages\NotHandled {
/**
 * NotHandledReason enum embedded in NotHandled message
 */
final class NotHandledReason
{
    const NotReady = 0;
    const TooBusy = 1;
    const NotMaster = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'NotReady' => self::NotReady,
            'TooBusy' => self::TooBusy,
            'NotMaster' => self::NotMaster,
        );
    }
}
}

namespace EventStore\Client\Messages\NotHandled {
/**
 * MasterInfo message embedded in NotHandled message
 */
class MasterInfo extends \ProtobufMessage
{
    /* Field index constants */
    const EXTERNAL_TCP_ADDRESS = 1;
    const EXTERNAL_TCP_PORT = 2;
    const EXTERNAL_HTTP_ADDRESS = 3;
    const EXTERNAL_HTTP_PORT = 4;
    const EXTERNAL_SECURE_TCP_ADDRESS = 5;
    const EXTERNAL_SECURE_TCP_PORT = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::EXTERNAL_TCP_ADDRESS => array(
            'name' => 'external_tcp_address',
            'required' => true,
            'type' => 7,
        ),
        self::EXTERNAL_TCP_PORT => array(
            'name' => 'external_tcp_port',
            'required' => true,
            'type' => 5,
        ),
        self::EXTERNAL_HTTP_ADDRESS => array(
            'name' => 'external_http_address',
            'required' => true,
            'type' => 7,
        ),
        self::EXTERNAL_HTTP_PORT => array(
            'name' => 'external_http_port',
            'required' => true,
            'type' => 5,
        ),
        self::EXTERNAL_SECURE_TCP_ADDRESS => array(
            'name' => 'external_secure_tcp_address',
            'required' => false,
            'type' => 7,
        ),
        self::EXTERNAL_SECURE_TCP_PORT => array(
            'name' => 'external_secure_tcp_port',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::EXTERNAL_TCP_ADDRESS] = null;
        $this->values[self::EXTERNAL_TCP_PORT] = null;
        $this->values[self::EXTERNAL_HTTP_ADDRESS] = null;
        $this->values[self::EXTERNAL_HTTP_PORT] = null;
        $this->values[self::EXTERNAL_SECURE_TCP_ADDRESS] = null;
        $this->values[self::EXTERNAL_SECURE_TCP_PORT] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'external_tcp_address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExternalTcpAddress($value)
    {
        return $this->set(self::EXTERNAL_TCP_ADDRESS, $value);
    }

    /**
     * Returns value of 'external_tcp_address' property
     *
     * @return string
     */
    public function getExternalTcpAddress()
    {
        return $this->get(self::EXTERNAL_TCP_ADDRESS);
    }

    /**
     * Sets value of 'external_tcp_port' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setExternalTcpPort($value)
    {
        return $this->set(self::EXTERNAL_TCP_PORT, $value);
    }

    /**
     * Returns value of 'external_tcp_port' property
     *
     * @return int
     */
    public function getExternalTcpPort()
    {
        return $this->get(self::EXTERNAL_TCP_PORT);
    }

    /**
     * Sets value of 'external_http_address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExternalHttpAddress($value)
    {
        return $this->set(self::EXTERNAL_HTTP_ADDRESS, $value);
    }

    /**
     * Returns value of 'external_http_address' property
     *
     * @return string
     */
    public function getExternalHttpAddress()
    {
        return $this->get(self::EXTERNAL_HTTP_ADDRESS);
    }

    /**
     * Sets value of 'external_http_port' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setExternalHttpPort($value)
    {
        return $this->set(self::EXTERNAL_HTTP_PORT, $value);
    }

    /**
     * Returns value of 'external_http_port' property
     *
     * @return int
     */
    public function getExternalHttpPort()
    {
        return $this->get(self::EXTERNAL_HTTP_PORT);
    }

    /**
     * Sets value of 'external_secure_tcp_address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExternalSecureTcpAddress($value)
    {
        return $this->set(self::EXTERNAL_SECURE_TCP_ADDRESS, $value);
    }

    /**
     * Returns value of 'external_secure_tcp_address' property
     *
     * @return string
     */
    public function getExternalSecureTcpAddress()
    {
        return $this->get(self::EXTERNAL_SECURE_TCP_ADDRESS);
    }

    /**
     * Sets value of 'external_secure_tcp_port' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setExternalSecureTcpPort($value)
    {
        return $this->set(self::EXTERNAL_SECURE_TCP_PORT, $value);
    }

    /**
     * Returns value of 'external_secure_tcp_port' property
     *
     * @return int
     */
    public function getExternalSecureTcpPort()
    {
        return $this->get(self::EXTERNAL_SECURE_TCP_PORT);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * NotHandled message
 */
class NotHandled extends \ProtobufMessage
{
    /* Field index constants */
    const REASON = 1;
    const ADDITIONAL_INFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REASON => array(
            'name' => 'reason',
            'required' => true,
            'type' => 5,
        ),
        self::ADDITIONAL_INFO => array(
            'name' => 'additional_info',
            'required' => false,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::REASON] = null;
        $this->values[self::ADDITIONAL_INFO] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'reason' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setReason($value)
    {
        return $this->set(self::REASON, $value);
    }

    /**
     * Returns value of 'reason' property
     *
     * @return int
     */
    public function getReason()
    {
        return $this->get(self::REASON);
    }

    /**
     * Sets value of 'additional_info' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAdditionalInfo($value)
    {
        return $this->set(self::ADDITIONAL_INFO, $value);
    }

    /**
     * Returns value of 'additional_info' property
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->get(self::ADDITIONAL_INFO);
    }
}
}

namespace EventStore\Client\Messages {
/**
 * ScavengeDatabase message
 */
class ScavengeDatabase extends \ProtobufMessage
{
    /* Field index constants */

    /* @var array Field descriptors */
    protected static $fields = array(
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }
}
}

namespace EventStore\Client\Messages\ScavengeDatabaseCompleted {
/**
 * ScavengeResult enum embedded in ScavengeDatabaseCompleted message
 */
final class ScavengeResult
{
    const Success = 0;
    const InProgress = 1;
    const Failed = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Success' => self::Success,
            'InProgress' => self::InProgress,
            'Failed' => self::Failed,
        );
    }
}
}

namespace EventStore\Client\Messages {
/**
 * ScavengeDatabaseCompleted message
 */
class ScavengeDatabaseCompleted extends \ProtobufMessage
{
    /* Field index constants */
    const RESULT = 1;
    const ERROR = 2;
    const TOTAL_TIME_MS = 3;
    const TOTAL_SPACE_SAVED = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESULT => array(
            'name' => 'result',
            'required' => true,
            'type' => 5,
        ),
        self::ERROR => array(
            'name' => 'error',
            'required' => false,
            'type' => 7,
        ),
        self::TOTAL_TIME_MS => array(
            'name' => 'total_time_ms',
            'required' => true,
            'type' => 5,
        ),
        self::TOTAL_SPACE_SAVED => array(
            'name' => 'total_space_saved',
            'required' => true,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::RESULT] = null;
        $this->values[self::ERROR] = null;
        $this->values[self::TOTAL_TIME_MS] = null;
        $this->values[self::TOTAL_SPACE_SAVED] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'result' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResult($value)
    {
        return $this->set(self::RESULT, $value);
    }

    /**
     * Returns value of 'result' property
     *
     * @return int
     */
    public function getResult()
    {
        return $this->get(self::RESULT);
    }

    /**
     * Sets value of 'error' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setError($value)
    {
        return $this->set(self::ERROR, $value);
    }

    /**
     * Returns value of 'error' property
     *
     * @return string
     */
    public function getError()
    {
        return $this->get(self::ERROR);
    }

    /**
     * Sets value of 'total_time_ms' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTotalTimeMs($value)
    {
        return $this->set(self::TOTAL_TIME_MS, $value);
    }

    /**
     * Returns value of 'total_time_ms' property
     *
     * @return int
     */
    public function getTotalTimeMs()
    {
        return $this->get(self::TOTAL_TIME_MS);
    }

    /**
     * Sets value of 'total_space_saved' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setTotalSpaceSaved($value)
    {
        return $this->set(self::TOTAL_SPACE_SAVED, $value);
    }

    /**
     * Returns value of 'total_space_saved' property
     *
     * @return int
     */
    public function getTotalSpaceSaved()
    {
        return $this->get(self::TOTAL_SPACE_SAVED);
    }
}
}
