<?php

namespace api\entities\clients;

use perf2k2\direct\api\JsonSerializable;

class ClientUpdateItem extends JsonSerializable
{
    protected $ClientInfo;
    protected $Notification;
    protected $Phone;
    protected $Settings;
    
    public function setClientInfo(string $ClientInfo)
    {
        $this->ClientInfo = $ClientInfo;
        return $this;
    }
    
    public function setNotification(NotificationUpdate $Notification)
    {
        $this->Notification = $Notification;
        return $this;
    }
    
    public function setPhone(string $Phone)
    {
        $this->Phone = $Phone;
        return $this;
    }
    
    public function setSettings(array $Settings)
    {
        $this->Settings = $Settings;
        return $this;
    }
}