<?php

namespace direct\api\methods;

use direct\api\entities\adgroups\AdGroupsSelectionCriteria;
use direct\api\GetMethod;


class AdGroupsGet extends GetMethod
{
    protected $MobileAppAdGroupFieldNames = [];
    protected $DynamicTextAdGroupFieldNames = [];
    protected $DynamicTextFeedAdGroupFieldNames = [];

    public function setSelectionCriteria(AdGroupsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }

    public function setMobileAppAdGroupFieldNames(array $MobileAppAdGroupFieldNames): self
    {
        $this->MobileAppAdGroupFieldNames = $MobileAppAdGroupFieldNames;
        return $this;
    }

    public function setDynamicTextAdGroupFieldNames(array $DynamicTextAdGroupFieldNames): self
    {
        $this->DynamicTextAdGroupFieldNames = $DynamicTextAdGroupFieldNames;
        return $this;
    }

    public function setDynamicTextFeedAdGroupFieldNames(array $DynamicTextFeedAdGroupFieldNames): self
    {
        $this->DynamicTextFeedAdGroupFieldNames = $DynamicTextFeedAdGroupFieldNames;
        return $this;
    }
}