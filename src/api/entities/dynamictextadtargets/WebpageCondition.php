<?php

namespace direct\api\entities\dynamictextadtargets;

use direct\api\Entity;

class WebpageCondition extends Entity
{
    protected $Operand;
    protected $Operator;
    protected $Arguments;
    
    public function __construct(string $Operand, string $Operator, array $Arguments)
    {
        $this->Operand = $Operand;
        $this->Operator = $Operator;
        $this->Arguments = $Arguments;
    }
}