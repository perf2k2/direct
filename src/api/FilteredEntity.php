<?php

namespace perf2k2\direct\api;

abstract class FilteredEntity extends Entity  implements \JsonSerializable
{
    function jsonSerialize()
    {
        return array_filter(parent::jsonSerialize());
    }
}