<?php

namespace direct\api\entities\adextensions;

use direct\api\Entity;

class Callout extends Entity
{
    protected $CalloutText;
    
    public function __construct(string $CalloutText)
    {
        $this->CalloutText = $CalloutText;
    }
}