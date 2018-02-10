<?php

namespace api\methods;

use api\entities\keywordsresearch\HasSearchVolumeSelectionCriteria;
use perf2k2\direct\api\Method;
use perf2k2\direct\api\MethodInterface;

class KeywordsResearchHasSearchVolume extends Method implements MethodInterface
{
    protected $SelectionCriteria;
    protected $FieldNames;
    
    public static function getApiName(): string
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