<?php

namespace direct\api\entities\adimages;

use direct\api\Entity;

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