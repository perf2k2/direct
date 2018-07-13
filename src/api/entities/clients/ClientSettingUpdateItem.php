<?php

namespace perf2k2\direct\api\entities\clients;

use perf2k2\direct\api\enums\clients\ClientSettingUpdateEnum;
use perf2k2\direct\api\Entity;

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