<?php

namespace perf2k2\direct\api;

class Enum extends \MyCLabs\Enum\Enum implements \JsonSerializable
{
    public function jsonSerialize()
    {
        return $this->value;
    }
}