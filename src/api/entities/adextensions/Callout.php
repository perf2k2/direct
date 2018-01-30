<?php

namespace api\entities\adextensions;

use perf2k2\direct\api\JsonSerializable;

class Callout extends JsonSerializable
{
    protected $CalloutText;
    
    public function __construct(string $CalloutText)
    {
        $this->CalloutText = $CalloutText;
    }
}