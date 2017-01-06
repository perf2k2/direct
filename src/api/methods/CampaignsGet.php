<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\campaigns\CampaignsSelectionCriteria;
use perf2k2\direct\api\GetMethod;
use perf2k2\direct\api\MethodInterface;

class CampaignsGet extends GetMethod implements MethodInterface
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