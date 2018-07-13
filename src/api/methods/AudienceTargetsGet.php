<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\audiencetargets\AudienceTargetsSelectionCriteria;
use perf2k2\direct\api\GetMethod;


class AudienceTargetsGet extends GetMethod
{
    public function setSelectionCriteria(AudienceTargetsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}