<?php

namespace perf2k2\direct\api\params;

use perf2k2\direct\api\entities\AdsSelectionCriteria;

class AdsGetParams extends BaseParams implements ParamsInterface
{
    public $TextAdFieldNames = [];
    public $MobileAppAdFieldNames = [];
    public $DynamicTextAdFieldNames = [];

    public function setSelectionCriteria(AdsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }

    public function setTextAdFieldNames(array $TextAdFieldNames): self
    {
        $this->TextAdFieldNames = $TextAdFieldNames;
        return $this;
    }

    public function setMobileAppAdFieldNames(array $MobileAppAdFieldNames): self
    {
        $this->MobileAppAdFieldNames = $MobileAppAdFieldNames;
        return $this;
    }

    public function setDynamicTextAdFieldNames(array $DynamicTextAdFieldNames): self
    {
        $this->DynamicTextAdFieldNames = $DynamicTextAdFieldNames;
        return $this;
    }
}