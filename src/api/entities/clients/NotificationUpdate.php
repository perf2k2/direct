<?php

namespace api\entities\clients;

use perf2k2\direct\api\JsonSerializable;

class NotificationUpdate extends JsonSerializable
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