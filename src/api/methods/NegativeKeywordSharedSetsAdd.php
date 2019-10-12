<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;
use perf2k2\direct\api\entities\negativekeywordsharedsets\NegativeKeywordSharedSetAddItem;

class NegativeKeywordSharedSetsAdd extends AddMethod
{
    protected $NegativeKeywordSharedSets;

    /**
     * @param NegativeKeywordSharedSetAddItem[] $NegativeKeywordSharedSets
     * @return NegativeKeywordSharedSetsAdd
     */
    public function setNegativeKeywordSharedSets(array $NegativeKeywordSharedSets): NegativeKeywordSharedSetsAdd
    {
        $this->NegativeKeywordSharedSets = $NegativeKeywordSharedSets;
        return $this;
    }
}