<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\keywordbids\KeywordBidSetItem;
use perf2k2\direct\api\SetMethod;

class KeywordBidsSet extends SetMethod
{
    protected $KeywordBids = [];

    /**
     * @param KeywordBidSetItem[] $bids
     * @return KeywordBidsSet
     */
    public function setKeywordBids(array $bids): self
    {
        $this->KeywordBids = $bids;
        return $this;
    }
}