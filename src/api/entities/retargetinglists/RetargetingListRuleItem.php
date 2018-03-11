<?php

namespace direct\api\entities\retargetinglists;

use direct\api\Entity;

class RetargetingListRuleItem extends Entity
{
    protected $Arguments;
    protected $Operator;
    
    public function __construct(array $Arguments, string $Operator)
    {
        $this->Arguments = $Arguments;
        $this->Operator = $Operator;
    }
}