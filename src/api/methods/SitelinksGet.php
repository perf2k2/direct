<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\GetMethod;


class SitelinksGet extends GetMethod
{
    public function setSelectionCriteria(IdsCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}