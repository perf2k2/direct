<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\keywordbids\KeywordBidsSelectionCriteria;
use perf2k2\direct\api\enums\keywordbids\KeywordBidFieldEnum;
use perf2k2\direct\api\enums\keywordbids\KeywordBidNetworkFieldEnum;
use perf2k2\direct\api\enums\keywordbids\KeywordBidSearchFieldEnum;
use perf2k2\direct\api\GetMethod;

class KeywordBidsGet extends GetMethod
{
    protected $SearchFieldNames = [];
    protected $NetworkFieldNames = [];

    public function setSelectionCriteria(KeywordBidsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }

    /**
     * @param KeywordBidFieldEnum[] $FieldNames
     * @return GetMethod
     */
    public function setFieldNames(array $FieldNames)
    {
        return parent::setFieldNames($FieldNames);
    }

    /**
     * @param KeywordBidSearchFieldEnum[] $SearchFieldNames
     * @return $this
     */
    public function setSearchFieldNames(array $SearchFieldNames)
    {
        $this->SearchFieldNames = $SearchFieldNames;
        return $this;
    }

    /**
     * @param KeywordBidNetworkFieldEnum[] $NetworkFieldNames
     * @return $this
     */
    public function setNetworkFieldNames(array $NetworkFieldNames)
    {
        $this->NetworkFieldNames = $NetworkFieldNames;
        return $this;
    }
}