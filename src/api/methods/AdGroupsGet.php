<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\adgroups\AdGroupsSelectionCriteria;
use perf2k2\direct\api\enums\adgroups\AdGroupFieldEnum;
use perf2k2\direct\api\enums\adgroups\DynamicTextAdGroupFieldEnum;
use perf2k2\direct\api\enums\adgroups\DynamicTextFeedAdGroupFieldEnum;
use perf2k2\direct\api\enums\adgroups\MobileAppAdGroupFieldEnum;
use perf2k2\direct\api\GetMethod;

class AdGroupsGet extends GetMethod
{
    protected $MobileAppAdGroupFieldNames = [];
    protected $DynamicTextAdGroupFieldNames = [];
    protected $DynamicTextFeedAdGroupFieldNames = [];

    public function setSelectionCriteria(AdGroupsSelectionCriteria $SelectionCriteria): AdGroupsGet
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }

    /**
     * @param AdGroupFieldEnum[] $FieldNames
     * @return $this|GetMethod
     */
    public function setFieldNames(array $FieldNames): AdGroupsGet
    {
        $this->FieldNames = $FieldNames;
        return $this;
    }

    /**
     * @param MobileAppAdGroupFieldEnum[] $MobileAppAdGroupFieldNames
     * @return AdGroupsGet
     */
    public function setMobileAppAdGroupFieldNames(array $MobileAppAdGroupFieldNames): AdGroupsGet
    {
        $this->MobileAppAdGroupFieldNames = $MobileAppAdGroupFieldNames;
        return $this;
    }

    /**
     * @param DynamicTextAdGroupFieldEnum[] $DynamicTextAdGroupFieldNames
     * @return AdGroupsGet
     */
    public function setDynamicTextAdGroupFieldNames(array $DynamicTextAdGroupFieldNames): AdGroupsGet
    {
        $this->DynamicTextAdGroupFieldNames = $DynamicTextAdGroupFieldNames;
        return $this;
    }

    /**
     * @param DynamicTextFeedAdGroupFieldEnum[] $DynamicTextFeedAdGroupFieldNames
     * @return AdGroupsGet
     */
    public function setDynamicTextFeedAdGroupFieldNames(array $DynamicTextFeedAdGroupFieldNames): AdGroupsGet
    {
        $this->DynamicTextFeedAdGroupFieldNames = $DynamicTextFeedAdGroupFieldNames;
        return $this;
    }
}