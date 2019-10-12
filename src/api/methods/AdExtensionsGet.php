<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\adextensions\AdExtensionsSelectionCriteria;
use perf2k2\direct\api\enums\adextensions\AdExtensionFieldEnum;
use perf2k2\direct\api\enums\adextensions\CalloutFieldEnum;
use perf2k2\direct\api\GetMethod;

class AdExtensionsGet extends GetMethod
{
    protected $CalloutFieldNames;
    
    public function setSelectionCriteria(AdExtensionsSelectionCriteria $SelectionCriteria): AdExtensionsGet
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }

    /**
     * @param AdExtensionFieldEnum[] $FieldNames
     * @return AdExtensionsGet
     */
    public function setFieldNames(array $FieldNames): AdExtensionsGet
    {
        $this->FieldNames = $FieldNames;
        return $this;
    }

    /**
     * @param CalloutFieldEnum[] $CalloutFieldNames
     * @return AdExtensionsGet
     */
    public function setCalloutFieldNames(array $CalloutFieldNames): AdExtensionsGet
    {
        $this->CalloutFieldNames = $CalloutFieldNames;
        return $this;
    }
}