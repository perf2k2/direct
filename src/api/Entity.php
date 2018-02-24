<?php

namespace perf2k2\direct\api;

abstract class Entity implements \JsonSerializable
{
    function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}