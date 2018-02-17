<?php

namespace api\entities\campaigns;

use perf2k2\direct\api\Entity;

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