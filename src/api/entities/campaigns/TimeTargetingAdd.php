<?php

namespace perf2k2\direct\api\entities\campaigns;

use perf2k2\direct\api\entities\ArrayOfString;
use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\YesNoEnum;

class TimeTargetingAdd extends Entity
{
    protected $Schedule;
    protected $ConsiderWorkingWeekends;
    protected $HolidaysSchedule;
    
    public function __construct(YesNoEnum $ConsiderWorkingWeekends)
    {
        $this->ConsiderWorkingWeekends = $ConsiderWorkingWeekends;
    }
    
    public function setSchedule(ArrayOfString $Schedule)
    {
        $this->Schedule = $Schedule;
        return $this;
    }
    
    public function setHolidaysSchedule(TimeTargetingOnPublicHolidays $HolidaysSchedule)
    {
        $this->HolidaysSchedule = $HolidaysSchedule;
        return $this;
    }
}