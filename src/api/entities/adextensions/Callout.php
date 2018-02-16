<?php

namespace api\entities\adextensions;

use perf2k2\direct\api\Entity;

class Callout extends Entity
{
    protected $CalloutText;
    
    public function __construct(string $CalloutText)
    {
        $this->CalloutText = $CalloutText;
    }
}