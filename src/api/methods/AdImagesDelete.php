<?php

namespace direct\api\methods;

use direct\api\entities\adimages\AdImageIdsCriteria;
use direct\api\AbstractMethod;
use direct\api\NamedMethodInterface;

class AdImagesDelete extends AbstractMethod implements NamedMethodInterface
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