<?php

namespace direct\api\entities;

use direct\api\Entity;

class IdsCriteria extends Entity
{
    protected $Ids;

    public function setIds(array $Ids)
    {
        $this->Ids = $Ids;
        return $this;
    }
}