<?php

namespace direct\api\methods;

use direct\api\entities\campaigns\CampaignsSelectionCriteria;
use direct\api\GetMethod;


class CampaignsGet extends GetMethod
{
    protected $TextCampaignFieldNames = [];
    protected $MobileAppCampaignFieldNames = [];
    protected $DynamicTextCampaignFieldNames = [];

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