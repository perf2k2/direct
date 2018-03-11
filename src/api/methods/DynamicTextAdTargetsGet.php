<?php

namespace direct\api\methods;

use direct\api\entities\dynamictextadtargets\WebpagesSelectionCriteria;
use direct\api\GetMethod;

class DynamicTextAdTargetsGet extends GetMethod
{
    public function setSelectionCriteria(WebpagesSelectionCriteria $SelectionCriteria)
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}