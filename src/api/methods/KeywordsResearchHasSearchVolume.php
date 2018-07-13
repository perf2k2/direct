<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\keywordsresearch\HasSearchVolumeSelectionCriteria;
use perf2k2\direct\api\AbstractMethod;
use perf2k2\direct\api\NamedMethodInterface;

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