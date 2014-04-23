<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Transport;

use Bgy\EventStore\Exception;
use InvalidArgumentException;

class UnknownOperationException extends InvalidArgumentException implements Exception
{
    public function __construct($operationName)
    {
        parent::__construct(sprintf('"%s" is not a known operation'));
    }
}
