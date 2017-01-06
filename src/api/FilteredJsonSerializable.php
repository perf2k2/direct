<?php

namespace perf2k2\direct\api;

abstract class FilteredJsonSerializable extends JsonSerializable  implements \JsonSerializable
{
    function jsonSerialize()
    {
        return array_filter(parent::jsonSerialize());
    }
}