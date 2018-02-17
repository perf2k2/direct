<?php

namespace api\entities\campaigns;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\YesNoEnum;

class EmailSettings extends Entity
{
    protected $Email;
    protected $CheckPositionInterval;
    protected $WarningBalance;
    protected $SendAccountNews;
    protected $SendWarnings;
    
    public function setEmail(string $Email)
    {
        $this->Email = $Email;
        return $this;
    }
    
    public function setCheckPositionInterval(int $CheckPositionInterval)
    {
        $this->CheckPositionInterval = $CheckPositionInterval;
        return $this;
    }
    
    public function setWarningBalance(int $WarningBalance)
    {
        $this->WarningBalance = $WarningBalance;
        return $this;
    }
    
    public function setSendAccountNews(YesNoEnum $SendAccountNews)
    {
        $this->SendAccountNews = $SendAccountNews;
        return $this;
    }
    
    public function setSendWarnings(YesNoEnum $SendWarnings)
    {
        $this->SendWarnings = $SendWarnings;
        return $this;
    }
}