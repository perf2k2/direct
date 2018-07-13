<?php

namespace perf2k2\direct\api\entities\clients;

use perf2k2\direct\api\enums\clients\EmailSubscriptionEnum;
use perf2k2\direct\api\Entity;

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