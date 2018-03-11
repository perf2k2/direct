<?php

namespace direct\api\entities\campaigns;

use direct\api\entities\campaigns\textcampaign\TextCampaignAddItem;
use direct\api\Entity;

class CampaignAddItem extends Entity
{
    protected $ClientInfo;
    protected $Notification;
    protected $TimeZone;
    protected $Name;
    protected $StartDate;
    protected $DailyBudget;
    protected $EndDate;
    protected $NegativeKeywords;
    protected $BlockedIps;
    protected $ExcludedSites;
    protected $TextCampaign;
    protected $MobileAppCampaign;
    protected $DynamicTextCampaign;
    protected $TimeTargeting;
    
    public function __construct(string $Name, string $StartDate)
    {
        $this->Name = $Name;
        $this->StartDate = $StartDate;
    }
    
    public function setClientInfo(string $ClientInfo)
    {
        $this->ClientInfo = $ClientInfo;
        return $this;
    }
    
    public function setNotification(Notification $Notification)
    {
        $this->Notification = $Notification;
        return $this;
    }
    
    public function setTimeZone(string $TimeZone)
    {
        $this->TimeZone = $TimeZone;
        return $this;
    }
    
    public function setDailyBudget(DailyBudget $DailyBudget)
    {
        $this->DailyBudget = $DailyBudget;
        return $this;
    }
    
    public function setEndDate(string $EndDate)
    {
        $this->EndDate = $EndDate;
        return $this;
    }
    
    public function setNegativeKeywords(array $NegativeKeywords)
    {
        $this->NegativeKeywords = $NegativeKeywords;
        return $this;
    }
    
    public function setBlockedIps(array $BlockedIps)
    {
        $this->BlockedIps = $BlockedIps;
        return $this;
    }
    
    public function setExcludedSites(array $ExcludedSites)
    {
        $this->ExcludedSites = $ExcludedSites;
        return $this;
    }
    
    public function setTextCampaign(TextCampaignAddItem $TextCampaign)
    {
        $this->TextCampaign = $TextCampaign;
        return $this;
    }
    
    public function setMobileAppCampaign(array $MobileAppCampaign)
    {
        $this->MobileAppCampaign = $MobileAppCampaign;
        return $this;
    }
    
    public function setDynamicTextCampaign(array $DynamicTextCampaign)
    {
        $this->DynamicTextCampaign = $DynamicTextCampaign;
        return $this;
    }
    
    public function setTimeTargeting(TimeTargetingAdd $TimeTargeting)
    {
        $this->TimeTargeting = $TimeTargeting;
        return $this;
    }
}