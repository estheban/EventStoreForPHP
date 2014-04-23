<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore;

class StreamMetadata
{
    /**
    * Roles and users permitted to read the stream
    */
    private $readRole;

    /**
    * Roles and users permitted to write to the stream
    */
    private $writeRole;

    /**
    * Roles and users permitted to delete the stream
    */
    private $deleteRole;

    /**
    * Roles and users permitted to read stream metadata
    */
    private $metaReadRole;

    /**
    * Roles and users permitted to write stream metadata
    */
    private $metaWriteRole;
}
