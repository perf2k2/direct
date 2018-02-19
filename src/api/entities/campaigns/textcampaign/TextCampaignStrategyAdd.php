<?php

namespace api\entities\campaigns\textcampaign;

class TextCampaignStrategyAdd
{
    protected $Search;
    protected $Network;

    public function __construct(TextCampaignSearchStrategyAdd $Search, TextCampaignNetworkStrategyAdd $Network)
    {
      $this->Search = $Search;
      $this->Network = $Network;
    }
}
