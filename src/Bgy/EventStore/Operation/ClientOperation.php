<?php

namespace Bgy\EventStore\Operation;

interface ClientOperation
{
    public function getOperationName();
    public function createRequestDto();
}
