<?php

namespace perf2k2\direct\api\params;

use perf2k2\direct\api\entities\IdsCriteria;

class SitelinksDeleteParams implements ParamsInterface
{
    public $SelectionCriteria;

    public function setSelectionCriteria(IdsCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}