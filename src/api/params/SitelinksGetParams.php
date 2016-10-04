<?php

namespace perf2k2\direct\api\params;

use perf2k2\direct\api\entities\IdsCriteria;

class SitelinksGetParams extends BaseParams implements ParamsInterface
{
    public function setSelectionCriteria(IdsCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}