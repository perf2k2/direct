<?php

namespace direct\api\entities\campaigns;

use direct\api\Entity;
use direct\api\enums\YesNoEnum;

class TimeTargetingOnPublicHolidays extends Entity
{
    protected $SuspendOnHolidays;
    protected $BidPercent;
    protected $StartHour;
    protected $EndHour;
    
    public function __construct(YesNoEnum $SuspendOnHolidays)
    {
        $this->SuspendOnHolidays = $SuspendOnHolidays;
    }
    
    public function setBidPercent(int $BidPercent)
    {
        $this->BidPercent = $BidPercent;
        return $this;
    }
    
    public function setStartHour(int $StartHour)
    {
        $this->StartHour = $StartHour;
        return $this;
    }
    
    public function setEndHour(int $EndHour)
    {
        $this->EndHour = $EndHour;
        return $this;
    }
}