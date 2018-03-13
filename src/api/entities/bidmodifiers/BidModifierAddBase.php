<?php

namespace direct\api\entities\bidmodifiers;

use direct\api\Entity;

class BidModifierAddBase extends Entity
{
    protected $CampaignId;
    protected $AdGroupId;

    public function setCampaignId(int $CampaignId)
    {
      $this->CampaignId = $CampaignId;
      return $this;
    }

    public function setAdGroupId(int $AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
      return $this;
    }
}
