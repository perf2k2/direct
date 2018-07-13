<?php

namespace perf2k2\direct\api\entities\agencyclients;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\agencyclients\PrivilegeEnum;
use perf2k2\direct\api\enums\YesNoEnum;

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