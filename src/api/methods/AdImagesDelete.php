<?php

namespace api\methods;

use api\entities\adimages\AdImageIdsCriteria;
use perf2k2\direct\api\ApiObjectInterface;
use perf2k2\direct\api\Method;

class AdImagesDelete extends Method implements ApiObjectInterface
{
    protected $SelectionCriteria;
    
    public static function getApiName(): string
    {
        return 'delete';
    }
    
    public function setSelectionCriteria(AdImageIdsCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}