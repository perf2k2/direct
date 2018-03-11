<?php

namespace direct\api\methods;

use direct\api\AddMethod;

class AdExtensionsAdd extends AddMethod
{
    protected $AdExtensions;

    public function setAdExtensions(array $AdExtensions)
    {
        $this->AdExtensions = $AdExtensions;
        return $this;
    }
}