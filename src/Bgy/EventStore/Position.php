<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore;

use Bgy\EventStore\Utils\Ensure;

class Position
{
    private $commitPosition;
    private $preparePosition;

    public function __construct($commitPosition, $preparePosition)
    {
        Ensure::min($commitPosition, $preparePosition, 'preparePosition');
        Ensure::integer($preparePosition, 'preparePosition');
        Ensure::integer($commitPosition, 'commitPosition');

        $this->commitPosition  = $commitPosition;
        $this->preparePosition = $preparePosition;
    }

    public function getCommitPosition()
    {
        return $this->commitPosition;
    }

    public function getPreparePosition()
    {
        return $this->preparePosition;
    }

    static public function start()
    {
        return new static(0, 0);
    }

    static public function end()
    {
        return new static(-1, -1);
    }

    static public function equals(Position $p1, Position $p2)
    {
        return ($p1->getCommitPosition() == $p2->getCommitPosition() && $p1->getPreparePosition() == $p2->getPreparePosition());
    }

    static public function notEquals(Position $p1, Position $p2)
    {
        return !(self::equals($p1, $p2));
    }

    static public function less(Position $p1, Position $p2)
    {
        return $p1->getCommitPosition() < $p2->getCommitPosition() || ($p1->getCommitPosition() === $p2->getCommitPosition() && $p1->getPreparePosition() < $p2->getPreparePosition());
    }

    static public function greater(Position $p1, Position $p2)
    {
        return $p1->getCommitPosition() > $p2->getCommitPosition() || ($p1->getCommitPosition() === $p2->getCommitPosition() && $p1->getPreparePosition() > $p2->getPreparePosition());
    }

    static public function lessOrEquals(Position $p1, Position $p2)
    {
        return self::less($p1, $p2) || self::equals($p1, $p2);
    }

    static public function greaterOrEquals(Position $p1, Position $p2)
    {
        return self::greater($p1, $p2) || self::equals($p1, $p2);
    }

    public function __toString()
    {
        return sprintf("%d/%d", $this->commitPosition, $this->preparePosition);
    }
} 
