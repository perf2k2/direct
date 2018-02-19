<?php

namespace api\entities\campaigns\textcampaign;

class TextCampaignAddItem
{
    protected $BiddingStrategy;
    protected $Settings;
    protected $CounterIds;
    protected $RelevantKeywords;

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

    public function setRelevantKeywords($RelevantKeywords)
    {
      $this->RelevantKeywords = $RelevantKeywords;
      return $this;
    }

}
