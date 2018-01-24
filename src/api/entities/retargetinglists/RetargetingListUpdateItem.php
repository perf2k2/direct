<?php

namespace api\entities\retargetinglists;

class RetargetingListUpdateItem extends RetargetingListAddItem
{
    protected $Id;
    
    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
    
    public function setName(string $Name)
    {
        $this->Name = $Name;
        return $this;
    }
}