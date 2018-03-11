<?php

namespace direct\api\methods;

use direct\api\entities\audiencetargets\AudienceTargetsSelectionCriteria;
use direct\api\GetMethod;


class AudienceTargetsGet extends GetMethod
{
    public function setSelectionCriteria(AudienceTargetsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}