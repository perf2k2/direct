<?php

namespace perf2k2\direct\api\entities;

use perf2k2\direct\api\JsonSerializable;

final class LimitOffset extends JsonSerializable
{
    protected $Offset;
    protected $Limit;

    const MAX_SIZE = 10000;

    public function __construct($limit = self::MAX_SIZE, $offset = 0)
    {
        $this->Limit = $limit;
        $this->Offset = $offset;
    }
}