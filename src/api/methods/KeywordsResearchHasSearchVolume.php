<?php

namespace direct\api\methods;

use direct\api\entities\keywordsresearch\HasSearchVolumeSelectionCriteria;
use direct\api\AbstractMethod;
use direct\api\NamedMethodInterface;

class KeywordsResearchHasSearchVolume extends AbstractMethod implements NamedMethodInterface
{
    protected $SelectionCriteria;
    protected $FieldNames;
    
    public function getApiName(): string
    {
        return 'hasSearchVolume';
    }
    
    public function setSelectionCriteria(HasSearchVolumeSelectionCriteria $SelectionCriteria)
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
    
    public function setFieldNames(array $FieldNames)
    {
        $this->FieldNames = $FieldNames;
        return $this;
    }
}