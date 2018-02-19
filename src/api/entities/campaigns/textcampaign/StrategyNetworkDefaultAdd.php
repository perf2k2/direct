<?php

namespace api\entities\campaigns\textcampaign;

class StrategyNetworkDefaultAdd
{
    protected $LimitPercent;
    protected $BidPercent;

    public function __construct()
    {
    
    }

    public function setLimitPercent($LimitPercent)
    {
      $this->LimitPercent = $LimitPercent;
      return $this;
    }

    public function setBidPercent($BidPercent)
    {
      $this->BidPercent = $BidPercent;
      return $this;
    }

}
