<?php

namespace api\entities\campaigns\textcampaign;

class StrategyNetworkDefaultAdd
{
    protected $LimitPercent;
    protected $BidPercent;

    public function setLimitPercent(int $LimitPercent)
    {
      $this->LimitPercent = $LimitPercent;
      return $this;
    }

    public function setBidPercent(int $BidPercent)
    {
      $this->BidPercent = $BidPercent;
      return $this;
    }

}
