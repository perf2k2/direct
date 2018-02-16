<?php

namespace api\entities\retargetinglists;

use perf2k2\direct\api\Entity;

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