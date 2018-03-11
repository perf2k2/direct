<?php

namespace direct\api\methods;

use direct\api\entities\adimages\AdImageIdsCriteria;
use direct\api\ApiObjectInterface;
use direct\api\AbstractMethod;

class AdImagesDelete extends AbstractMethod implements ApiObjectInterface
{
    protected $SelectionCriteria;
    
    public function getApiName(): string
    {
        return 'delete';
    }
    
    public function setSelectionCriteria(AdImageIdsCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}