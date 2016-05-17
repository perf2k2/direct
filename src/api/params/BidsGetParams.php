<?php

namespace perf2k2\direct\api\params;

use perf2k2\direct\api\entities\BidsSelectionCriteria;

class BidsGetParams extends BaseParams implements ParamsInterface
{
    public function setSelectionCriteria(BidsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}