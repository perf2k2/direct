<?php

namespace direct\api\methods;

use direct\api\entities\agencyclients\NotificationAdd;
use direct\api\AddMethod;

class AgencyClientsAdd extends AddMethod
{
    protected $Login;
    protected $FirstName;
    protected $LastName;
    protected $Currency;
    protected $Grants;
    protected $Notification;
    protected $Settings;
    
    public function setLogin(string $Login)
    {
        $this->Login = $Login;
        return $this;
    }
    
    public function setFirstName(string $FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }
    
    public function setLastName(string $LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }
    
    public function setCurrency(string $Currency)
    {
        $this->Currency = $Currency;
        return $this;
    }
    
    public function setNotification(NotificationAdd $Notification)
    {
        $this->Notification = $Notification;
        return $this;
    }
    
    public function setSettings(array $Settings)
    {
        $this->Settings = $Settings;
        return $this;
    }

    public function setGrants(array $Grants)
    {
        $this->Grants = $Grants;
        return $this;
    }
}