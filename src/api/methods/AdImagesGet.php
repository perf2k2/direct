<?php

namespace direct\api\methods;

use direct\api\entities\adimages\AdImageSelectionCriteria;
use direct\api\GetMethod;

class AdImagesGet extends GetMethod
{
    public function setSelectionCriteria(AdImageSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}