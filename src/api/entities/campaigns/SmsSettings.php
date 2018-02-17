<?php

namespace api\entities\campaigns;

use perf2k2\direct\api\Entity;

class SmsSettings extends Entity
{
    protected $Events;
    protected $TimeFrom;
    protected $TimeTo;
    
    public function setEvents(array $Events)
    {
        $this->Events = $Events;
        return $this;
    }
    
    public function setTimeFrom(string $TimeFrom)
    {
        $this->TimeFrom = $TimeFrom;
        return $this;
    }
    
    public function setTimeTo(string $TimeTo)
    {
        $this->TimeTo = $TimeTo;
        return $this;
    }
}