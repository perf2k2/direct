<?php

namespace direct\api\entities;

use direct\api\Entity;

final class LimitOffset extends Entity
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