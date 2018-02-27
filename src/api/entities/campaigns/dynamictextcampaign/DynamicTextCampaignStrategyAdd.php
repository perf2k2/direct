<?php

namespace api\entities\campaigns\dynamictextcampaign;

use perf2k2\direct\api\Entity;

class DynamicTextCampaignStrategyAdd extends Entity
{
    protected $Search;
    protected $Network;

    public function __construct($Search, $Network)
    {
      $this->Search = $Search;
      $this->Network = $Network;
    }

    public function setSearch(DynamicTextCampaignSearchStrategyAdd $Search)
    {
      $this->Search = $Search;
      return $this;
    }

    public function setNetwork(DynamicTextCampaignNetworkStrategyAdd $Network)
    {
      $this->Network = $Network;
      return $this;
    }

}
