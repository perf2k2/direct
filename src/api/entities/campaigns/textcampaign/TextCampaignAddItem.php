<?php

namespace api\entities\campaigns\textcampaign;

use perf2k2\direct\api\Entity;

class TextCampaignAddItem extends Entity
{
    protected $BiddingStrategy;
    protected $Settings;
    protected $CounterIds;
    protected $RelevantKeywords;

    public function __construct(TextCampaignStrategyAdd $BiddingStrategy)
    {
      $this->BiddingStrategy = $BiddingStrategy;
    }

    public function setSettings(array $Settings)
    {
      $this->Settings = $Settings;
      return $this;
    }

    public function setCounterIds(array $CounterIds)
    {
      $this->CounterIds = $CounterIds;
      return $this;
    }

    public function setRelevantKeywords(RelevantKeywordsSettingAdd $RelevantKeywords)
    {
      $this->RelevantKeywords = $RelevantKeywords;
      return $this;
    }
}