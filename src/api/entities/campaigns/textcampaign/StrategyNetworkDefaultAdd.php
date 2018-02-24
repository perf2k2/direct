<?php

namespace api\entities\campaigns\textcampaign;

use perf2k2\direct\api\Entity;

class StrategyNetworkDefaultAdd extends Entity
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
