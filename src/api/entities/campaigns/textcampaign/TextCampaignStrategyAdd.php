<?php

namespace api\entities\campaigns\textcampaign;

use perf2k2\direct\api\Entity;

class TextCampaignStrategyAdd extends Entity
{
    protected $Search;
    protected $Network;

    public function __construct(TextCampaignSearchStrategyAdd $Search, TextCampaignNetworkStrategyAdd $Network)
    {
      $this->Search = $Search;
      $this->Network = $Network;
    }
}
