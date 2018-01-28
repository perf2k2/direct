<?php

namespace api\entities\adimages;

use perf2k2\direct\api\JsonSerializable;

class AdImageAddItem extends JsonSerializable
{
    protected $ImageData;
    protected $Name;
    
    public function __construct(string $ImageData, string $Name)
    {
        $this->ImageData = $ImageData;
        $this->Name = $Name;
    }
}