<?php

namespace perf2k2\direct\api\entities;

use perf2k2\direct\api\JsonSerializable;

class IdsCriteria extends JsonSerializable
{
    protected $Ids;

    public function setIds(array $Ids)
    {
        $this->Ids = $Ids;
        return $this;
    }
}