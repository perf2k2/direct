<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\agencyclients\ClientSettingAddItem;
use perf2k2\direct\api\entities\agencyclients\GrantItem;
use perf2k2\direct\api\entities\agencyclients\NotificationAdd;
use perf2k2\direct\api\AddMethod;
use perf2k2\direct\api\enums\CurrencyEnum;

class AgencyClientsAdd extends AddMethod
{
    protected $Login;
    protected $FirstName;
    protected $LastName;
    protected $Currency;
    protected $Grants;
    protected $Notification;
    protected $Settings;
    
    public function setLogin(string $Login): AgencyClientsAdd
    {
        $this->Login = $Login;
        return $this;
    }
    
    public function setFirstName(string $FirstName): AgencyClientsAdd
    {
        $this->FirstName = $FirstName;
        return $this;
    }
    
    public function setLastName(string $LastName): AgencyClientsAdd
    {
        $this->LastName = $LastName;
        return $this;
    }
    
    public function setCurrency(CurrencyEnum $Currency): AgencyClientsAdd
    {
        $this->Currency = $Currency;
        return $this;
    }
    
    public function setNotification(NotificationAdd $Notification): AgencyClientsAdd
    {
        $this->Notification = $Notification;
        return $this;
    }

    /**
     * @param ClientSettingAddItem[] $Settings
     * @return AgencyClientsAdd
     */
    public function setSettings(array $Settings): AgencyClientsAdd
    {
        $this->Settings = $Settings;
        return $this;
    }

    /**
     * @param GrantItem[] $Grants
     * @return AgencyClientsAdd
     */
    public function setGrants(array $Grants): AgencyClientsAdd
    {
        $this->Grants = $Grants;
        return $this;
    }
}