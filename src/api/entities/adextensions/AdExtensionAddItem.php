<?php

namespace api\entities\adextensions;

use perf2k2\direct\api\Entity;

class AdExtensionAddItem extends Entity
{
    protected $Callout;
    
    public function __construct(Callout $Callout)
    {
        $this->Callout = $Callout;
    }
}