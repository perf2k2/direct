<?php

namespace perf2k2\direct\v5\params;

use perf2k2\direct\v5\entities\CampaignsSelectionCriteria;

class CampaignsGetParams extends BaseParams implements ParamsInterface
{
    public $TextCampaignFieldNames = [];
    public $MobileAppCampaignFieldNames = [];
    public $DynamicTextCampaignFieldNames = [];

    public function setSelectionCriteria(CampaignsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }

    public function setTextCampaignFieldNames(array $TextCampaignFieldNames): self
    {
        $this->TextCampaignFieldNames = $TextCampaignFieldNames;
        return $this;
    }

    public function setMobileAppCampaignFieldNames(array $MobileAppCampaignFieldNames): self
    {
        $this->MobileAppCampaignFieldNames = $MobileAppCampaignFieldNames;
        return $this;
    }

    public function setDynamicTextCampaignFieldNames(array $DynamicTextCampaignFieldNames): self
    {
        $this->DynamicTextCampaignFieldNames = $DynamicTextCampaignFieldNames;
        return $this;
    }
}