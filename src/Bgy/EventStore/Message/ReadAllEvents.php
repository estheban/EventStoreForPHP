<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Message;


class ReadAllEvents
{
    public $commitPosition;
    public $preparePosition;
    public $maxCount;
    public $resolveLinkTos;
    public $requireMaster;

    /**
     * @param int  $commitPosition
     * @param int  $preparePosition
     * @param int  $maxCount
     * @param bool $resolveLinkTos
     * @param bool $requireMaster
     */
    public function __construct($commitPosition, $preparePosition, $maxCount, $resolveLinkTos, $requireMaster)
    {
        $this->commitPosition  = (int) $commitPosition;
        $this->preparePosition = (int) $preparePosition;
        $this->maxCount        = (int) $maxCount;
        $this->resolveLinkTos  = (bool) $resolveLinkTos;
        $this->requireMaster   = (bool) $requireMaster;
    }
}
