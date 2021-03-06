<?php

namespace perf2k2\direct\api\entities\retargetinglists;

use perf2k2\direct\api\Entity;

class RetargetingListAddItem extends Entity
{
    protected $Name;
    protected $Description;
    protected $Rules;
    
    public function __construct(string $Name)
    {
        $this->Name = $Name;
    }

    public function setDescription(string $Description)
    {
        $this->Description = $Description;
        return $this;
    }
    
    public function setRules(array $Rules)
    {
        $this->Rules = $Rules;
        return $this;
    }
}