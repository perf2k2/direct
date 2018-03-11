<?php

namespace direct\api\entities\campaigns;

use direct\api\Entity;

class Notification extends Entity
{
    protected $SmsSettings;
    protected $EmailSettings;
    
    public function setSmsSettings(SmsSettings $SmsSettings)
    {
        $this->SmsSettings = $SmsSettings;
        return $this;
    }
    
    public function setEmailSettings(EmailSettings $EmailSettings)
    {
        $this->EmailSettings = $EmailSettings;
        return $this;
    }
}