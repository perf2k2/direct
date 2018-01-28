<?php

namespace api\entities\adimages;

use perf2k2\direct\api\JsonSerializable;

class AdImageIdsCriteria extends JsonSerializable
{
    protected $AdImageHashes;
    
    public function __construct(array $AdImageHashes)
    {
        $this->AdImageHashes = $AdImageHashes;
    }
}