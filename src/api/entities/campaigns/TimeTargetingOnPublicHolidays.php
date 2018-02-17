<?php

namespace api\entities\campaigns;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\YesNoEnum;

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