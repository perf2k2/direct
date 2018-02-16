<?php

namespace api\entities\clients;

use perf2k2\direct\api\Entity;

class ClientSettingUpdateItem extends Entity
{
    protected $Option;
    protected $Value;
    
    public function __construct(string $Option, string $Value)
    {
        $this->Option = $Option;
        $this->Value = $Value;
    }
}