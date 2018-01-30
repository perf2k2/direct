<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;

class AdExtensionsAdd extends AddMethod
{
    protected $AdExtensions;

    public function setAdExtensions(array $AdExtensions)
    {
        $this->AdExtensions = $AdExtensions;
        return $this;
    }
}