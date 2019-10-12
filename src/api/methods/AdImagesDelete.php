<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\adimages\AdImageIdsCriteria;
use perf2k2\direct\api\AbstractMethod;
use perf2k2\direct\api\NamedMethodInterface;

class AdImagesDelete extends AbstractMethod implements NamedMethodInterface
{
    protected $SelectionCriteria;
    
    public function getApiName(): string
    {
        return 'delete';
    }
    
    public function setSelectionCriteria(AdImageIdsCriteria $SelectionCriteria): AdImagesDelete
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}