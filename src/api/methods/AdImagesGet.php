<?php

namespace perf2k2\direct\api\methods;

use api\entities\adimages\AdImageSelectionCriteria;
use perf2k2\direct\api\GetMethod;

class AdImagesGet extends GetMethod
{
    public function setSelectionCriteria(AdImageSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}