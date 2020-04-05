<?php

namespace perf2k2\direct\api\entities\clients;

use perf2k2\direct\api\Entity;

class ClientUpdateItem extends Entity
{
    protected $ClientInfo;
    protected $Notification;
    protected $Phone;
    protected $Settings;
    
    public function setClientInfo(string $ClientInfo): ClientUpdateItem
    {
        $this->ClientInfo = $ClientInfo;
        return $this;
    }
    
    public function setNotification(NotificationUpdate $Notification): ClientUpdateItem
    {
        $this->Notification = $Notification;
        return $this;
    }
    
    public function setPhone(string $Phone): ClientUpdateItem
    {
        $this->Phone = $Phone;
        return $this;
    }

    /**
     * @param ClientSettingUpdateItem[] $Settings
     * @return ClientUpdateItem
     */
    public function setSettings(array $Settings): ClientUpdateItem
    {
        $this->Settings = $Settings;
        return $this;
    }
}