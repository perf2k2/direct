<?php

namespace api\entities\agencyclients;

use perf2k2\direct\api\Entity;

class GrantItem extends Entity
{
    protected $Privilege;
    protected $Value;
    
    public function __construct(string $Privilege, string $Value)
    {
        $this->Privilege = $Privilege;
        $this->Value = $Value;
    }
}