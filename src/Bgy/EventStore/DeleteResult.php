<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore;


class DeleteResult
{
    private $logPosition;

    public function __construct(Position $logPosition)
    {
        $this->logPosition = $logPosition;
    }

    public function getLogPosition()
    {
        return $this->logPosition;
    }
}
