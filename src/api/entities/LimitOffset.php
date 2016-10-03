<?php

namespace perf2k2\direct\api\entities;

final class LimitOffset
{
    public $Offset;
    public $Limit;

    const MAX_SIZE = 10000;

    public function __construct($limit = self::MAX_SIZE, $offset = 0)
    {
        $this->Limit = $limit;
        $this->Offset = $offset;
    }
}