<?php

namespace api\methods;

use api\entities\adextensions\AdExtensionsSelectionCriteria;
use perf2k2\direct\api\GetMethod;

class AdExtensionsGet extends GetMethod
{
    protected $CalloutFieldNames;
    
    public function setSelectionCriteria(AdExtensionsSelectionCriteria $SelectionCriteria)
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
    
    public function setCalloutFieldNames(array $CalloutFieldNames)
    {
        $this->CalloutFieldNames = $CalloutFieldNames;
        return $this;
    }
}