<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\ads\AdsSelectionCriteria;
use perf2k2\direct\api\GetMethod;
use perf2k2\direct\api\MethodInterface;

class AdsGet extends GetMethod implements MethodInterface
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