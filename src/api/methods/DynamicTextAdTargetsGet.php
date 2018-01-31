<?php

namespace api\methods;

use api\entities\dynamictextadtargets\WebpagesSelectionCriteria;
use perf2k2\direct\api\GetMethod;

class DynamicTextAdTargetsGet extends GetMethod
{
    public function setSelectionCriteria(WebpagesSelectionCriteria $SelectionCriteria)
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}