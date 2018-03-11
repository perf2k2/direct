<?php

namespace direct\api\entities\adextensions;

use direct\api\Entity;

class AdExtensionAddItem extends Entity
{
    protected $Callout;
    
    public function __construct(Callout $Callout)
    {
        $this->Callout = $Callout;
    }
}