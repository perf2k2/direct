<?php

namespace direct\api\entities\campaigns;

use direct\api\Entity;

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