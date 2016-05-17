<?php

namespace perf2k2\direct\api\entities;

class LimitOffset
{
    public $Offset;
    public $Limit;

    const MAX_SIZE = 10000;

    public function __construct($offset = 0, $limit = self::MAX_SIZE)
    {
        $this->Offset = $offset;
        $this->Limit = $limit;
    }
}