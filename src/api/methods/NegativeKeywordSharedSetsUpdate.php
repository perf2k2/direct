<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\negativekeywordsharedsets\NegativeKeywordSharedSetUpdateItem;
use perf2k2\direct\api\UpdateMethod;

class NegativeKeywordSharedSetsUpdate extends UpdateMethod
{
    protected $NegativeKeywordSharedSets = [];

    /**
     * @param NegativeKeywordSharedSetUpdateItem[] $NegativeKeywordSharedSets
     * @return NegativeKeywordSharedSetsUpdate
     */
    public function setNegativeKeywordSharedSets(array $NegativeKeywordSharedSets): NegativeKeywordSharedSetsUpdate
    {
        $this->NegativeKeywordSharedSets = $NegativeKeywordSharedSets;
        return $this;
    }
}