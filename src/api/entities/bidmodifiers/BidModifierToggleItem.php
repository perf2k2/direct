<?php

namespace direct\api\entities\bidmodifiers;

use direct\api\FilteredEntity;

final class BidModifierToggleItem extends FilteredEntity
{
    protected $CampaignId;
    protected $AdGroupId;
    protected $Type;
    protected $Enabled;

    public function setCampaignId(int $CampaignId): self
    {
        $this->CampaignId = $CampaignId;
        return $this;
    }

    public function setAdGroupId(int $AdGroupId): self
    {
        $this->AdGroupId = $AdGroupId;
        return $this;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;
        return $this;
    }

    public function setEnabled(string $Enabled): self
    {
        $this->Enabled = $Enabled;
        return $this;
    }
}