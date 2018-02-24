<?php

namespace apientitiescampaignsdynamictextcampaign;

use perf2k2\direct\api\Entity;

class DynamicTextCampaignAddItem extends Entity
{
    protected $BiddingStrategy;
    protected $Settings;
    protected $CounterIds;

    public function __construct($BiddingStrategy)
    {
      $this->BiddingStrategy = $BiddingStrategy;
    }

    public function setBiddingStrategy($BiddingStrategy)
    {
      $this->BiddingStrategy = $BiddingStrategy;
      return $this;
    }

    public function setSettings(array $Settings = null)
    {
      $this->Settings = $Settings;
      return $this;
    }

    public function setCounterIds($CounterIds)
    {
      $this->CounterIds = $CounterIds;
      return $this;
    }

}
