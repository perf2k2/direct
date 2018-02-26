<?php

namespace api\entities\campaigns\mobileappcampaign;

use perf2k2\direct\api\Entity;

class MobileAppCampaignStrategyAdd extends Entity
{
    protected $Search;
    protected $Network;

    public function __construct(MobileAppCampaignSearchStrategyAdd $Search, MobileAppCampaignNetworkStrategyAdd $Network)
    {
      $this->Search = $Search;
      $this->Network = $Network;
    }

    public function setSearch($Search)
    {
      $this->Search = $Search;
      return $this;
    }

    public function setNetwork($Network)
    {
      $this->Network = $Network;
      return $this;
    }

}
