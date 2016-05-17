<?php

namespace perf2k2\direct\v5\params;

use perf2k2\direct\v5\entities\KeywordsSelectionCriteria;

class KeywordsGetParams extends BaseParams implements ParamsInterface
{
    public function setSelectionCriteria(KeywordsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}