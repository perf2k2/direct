<?php

namespace api\entities\adimages;

use perf2k2\direct\api\Entity;

class AdImageAddItem extends Entity
{
    protected $ImageData;
    protected $Name;
    
    public function __construct(string $ImageData, string $Name)
    {
        $this->ImageData = $ImageData;
        $this->Name = $Name;
    }
}