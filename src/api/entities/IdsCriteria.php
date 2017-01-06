<?php

namespace perf2k2\direct\api\entities;

use perf2k2\direct\api\JsonSerializable;

final class IdsCriteria extends JsonSerializable
{
    protected $Ids;

    public function setIds(array $Ids): self
    {
        $this->Ids = $Ids;
        return $this;
    }
}