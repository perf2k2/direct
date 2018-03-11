<?php

namespace direct\api\entities\clients;

use direct\api\enums\clients\ClientSettingUpdateEnum;
use direct\api\Entity;

class ClientSettingUpdateItem extends Entity
{
    protected $Option;
    protected $Value;
    
    public function __construct(ClientSettingUpdateEnum $Option, string $Value)
    {
        $this->Option = $Option;
        $this->Value = $Value;
    }
}