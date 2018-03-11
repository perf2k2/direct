<?php

namespace direct\api\entities\campaigns;

use direct\api\Entity;
use direct\api\enums\YesNoEnum;

class TimeTargetingAdd extends Entity
{
    protected $Schedule;
    protected $ConsiderWorkingWeekends;
    protected $HolidaysSchedule;
    
    public function __construct(YesNoEnum $ConsiderWorkingWeekends)
    {
        $this->ConsiderWorkingWeekends = $ConsiderWorkingWeekends;
    }
    
    public function setSchedule(array $Schedule)
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