<?php

namespace api\entities\adextensions;

use perf2k2\direct\api\JsonSerializable;

class AdExtensionAddItem extends JsonSerializable
{
    protected $Callout;
    
    public function __construct(Callout $Callout)
    {
        $this->Callout = $Callout;
    }
}