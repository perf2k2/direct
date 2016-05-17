<?php

namespace perf2k2\direct\api\params;

class BidsSetParams implements ParamsInterface
{
    public $Bids = [];

    public function setBids(array $bids): self
    {
        $this->Bids = $bids;
        return $this;
    }
}