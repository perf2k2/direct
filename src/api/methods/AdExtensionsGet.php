<?php

namespace direct\api\methods;

use direct\api\entities\adextensions\AdExtensionsSelectionCriteria;
use direct\api\GetMethod;

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