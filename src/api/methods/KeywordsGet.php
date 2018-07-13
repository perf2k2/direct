<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\keywords\KeywordsSelectionCriteria;
use perf2k2\direct\api\GetMethod;


class KeywordsGet extends GetMethod
{
    public function setSelectionCriteria(KeywordsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}