<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;
use perf2k2\direct\api\entities\adextensions\AdExtensionAddItem;

class AdExtensionsAdd extends AddMethod
{
    protected $AdExtensions;

    /**
     * @param AdExtensionAddItem[] $AdExtensions
     * @return AdExtensionsAdd
     */
    public function setAdExtensions(array $AdExtensions): AdExtensionsAdd
    {
        $this->AdExtensions = $AdExtensions;
        return $this;
    }
}