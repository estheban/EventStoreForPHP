<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Transport\Http;

interface HttpClientInterface
{
    public function getStream($streamName);
    public function deleteStream($streamName, $expectedVersion = null, $requireMaster = null, $hardDelete = null);
    public function getStreamEvent($streamName, $eventId);
    public function writeStreamEvents($streamName, array $events, $expectedVersion = null, $requireMaster = null);
}
