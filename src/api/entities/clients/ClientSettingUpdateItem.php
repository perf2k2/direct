<?php

namespace api\entities\clients;

use perf2k2\direct\api\JsonSerializable;

class ClientSettingUpdateItem extends JsonSerializable
{
    protected $Option;
    protected $Value;
    
    public function __construct(string $Option, string $Value)
    {
        $this->Option = $Option;
        $this->Value = $Value;
    }
}