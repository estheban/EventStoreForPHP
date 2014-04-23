<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore;

use Bgy\EventStore\Exception;

class InvalidEventReadStatusException extends \InvalidArgumentException implements Exception {}
