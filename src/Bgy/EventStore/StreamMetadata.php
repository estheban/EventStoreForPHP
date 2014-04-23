<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore;

class StreamMetadata
{
    /**
     * The maximum number of events allowed in the stream.
     */
    private $maxCount;

    /**
     * The maximum age of events allowed in the stream.
     */
    private $maxAge;

    /**
     * The event number from which previous events can be scavenged.
     * This is used to implement soft-deletion of streams.
     */
    private $truncateBefore;

    /**
     * The amount of time for which the stream head is cacheable.
     */
    private $cacheControl;

    /**
     * The access control list for the stream.
     */
    private $acl;

    /**
     * An array of the user-provided metadata.
     */
    private $customMetadata;
}
