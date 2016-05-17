<?php

namespace perf2k2\direct\v5\params;

use perf2k2\direct\v5\entities\BidsSelectionCriteria;

class BidsGetParams extends BaseParams implements ParamsInterface
{
    public function setSelectionCriteria(BidsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}