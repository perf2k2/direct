<?php

namespace direct\api\entities\clients;

use direct\api\Entity;

class NotificationUpdate extends Entity
{
    protected $Lang;
    protected $Email;
    protected $EmailSubscriptions;
    
    public function setLang(string $Lang)
    {
        $this->Lang = $Lang;
        return $this;
    }
    
    public function setEmail(string $Email)
    {
        $this->Email = $Email;
        return $this;
    }
    
    public function setEmailSubscriptions(array $EmailSubscriptions)
    {
        $this->EmailSubscriptions = $EmailSubscriptions;
        return $this;
    }
}