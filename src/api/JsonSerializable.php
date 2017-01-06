<?php

namespace perf2k2\direct\api;

abstract class JsonSerializable implements \JsonSerializable
{
    function jsonSerialize()
    {
        return get_object_vars($this);
    }
}