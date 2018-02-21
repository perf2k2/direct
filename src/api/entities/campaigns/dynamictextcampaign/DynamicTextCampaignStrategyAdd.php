<?php

namespace apientitiescampaignsdynamictextcampaign;

class DynamicTextCampaignStrategyAdd
{
    protected $Search;
    protected $Network;

    public function __construct($Search, $Network)
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
