<?php

namespace perf2k2\direct\api\entities\adextensions;

use perf2k2\direct\api\Entity;

class AdExtensionAddItem extends Entity
{
    protected $Callout;

    public function setCallout(Callout $Callout): AdExtensionAddItem
    {
        $this->Callout = $Callout;
        return $this;
    }
}