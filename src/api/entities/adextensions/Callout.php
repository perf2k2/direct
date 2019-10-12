<?php

namespace perf2k2\direct\api\entities\adextensions;

use perf2k2\direct\api\Entity;

class Callout extends Entity
{
    protected $CalloutText;

    public function setCalloutText(string $CalloutText): Callout
    {
        $this->CalloutText = $CalloutText;
        return $this;
    }
}