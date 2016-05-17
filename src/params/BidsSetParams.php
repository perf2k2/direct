<?php

namespace perf2k2\direct\v5\params;

class BidsSetParams implements ParamsInterface
{
    public $Bids = [];

    public function setBids(array $bids): self
    {
        $this->Bids = $bids;
        return $this;
    }
}