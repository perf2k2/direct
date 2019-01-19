<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\keywordbids\KeywordBidSetAutoItem;
use perf2k2\direct\api\SetMethod;

class KeywordBidsSetAuto extends SetMethod
{
    protected $KeywordBids = [];

    /**
     * @param KeywordBidSetAutoItem[] $bids
     * @return KeywordBidsSetAuto
     */
    public function setKeywordBids(array $bids): self
    {
        $this->KeywordBids = $bids;
        return $this;
    }
}