<?php

namespace direct\api\entities\clients;

use direct\api\enums\clients\EmailSubscriptionEnum;
use direct\api\Entity;

class EmailSubscriptionItem extends Entity
{
    protected $Option;
    protected $Value;
    
    public function __construct(EmailSubscriptionEnum $Option, string $Value)
    {
        $this->Option = $Option;
        $this->Value = $Value;
    }
}