<?php

namespace direct\api\entities\agencyclients;

use direct\api\Entity;
use direct\api\enums\agencyclients\PrivilegeEnum;
use direct\api\enums\YesNoEnum;

class GrantItem extends Entity
{
    protected $Privilege;
    protected $Value;
    
    public function __construct(PrivilegeEnum $Privilege, YesNoEnum $Value)
    {
        $this->Privilege = $Privilege;
        $this->Value = $Value;
    }
}