<?php

namespace perf2k2\direct\api\entities;

final class IdsCriteria
{
    public $Ids;

    public function setIds(array $Ids): self
    {
        $this->Ids = $Ids;
        return $this;
    }
}