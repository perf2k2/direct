<?php

namespace perf2k2\direct\api\params;

use perf2k2\direct\api\entities\keywords\KeywordsSelectionCriteria;

class KeywordsGetParams extends BaseParams implements ParamsInterface
{
    public function setSelectionCriteria(KeywordsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}