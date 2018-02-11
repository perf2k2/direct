<?php

namespace api\entities\agencyclients;

use perf2k2\direct\api\JsonSerializable;

class GrantItem extends JsonSerializable
{
    protected $Privilege;
    protected $Value;
    
    public function __construct(string $Privilege, string $Value)
    {
        $this->Privilege = $Privilege;
        $this->Value = $Value;
    }
}