<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore\Utils;

use Rhumsaa\Uuid\Uuid as RhumsaaUuid;

class Uuid
{
    private $uuid;

    public function __construct($uuid = null)
    {
        if ($uuid) {
            if (!RhumsaaUuid::isValid($uuid)) {
                throw new InvalidUuidException();
            }

            $uuidFromString = RhumsaaUuid::fromString($uuid);
            if (4 !== $uuidFromString->getVersion()) {
                throw new InvalidUuidException();
            }

            $this->uuid = $uuidFromString;

        } else {
            $this->uuid = RhumsaaUuid::uuid4();
        }
    }

    static public function isValid($uuid)
    {
        return RhumsaaUuid::isValid($uuid);
    }

    public function equals($uuid)
    {
        if (!$uuid instanceof Uuid) {

            return false;
        }

        return $this->uuid->equals(RhumsaaUuid::fromString($uuid->__toString()));
    }

    public function __toString()
    {
        return $this->uuid->toString();
    }
}
