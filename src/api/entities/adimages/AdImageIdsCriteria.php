<?php

namespace api\entities\adimages;

use perf2k2\direct\api\Entity;

class AdImageIdsCriteria extends Entity
{
    protected $AdImageHashes;
    
    public function __construct(array $AdImageHashes)
    {
        $this->AdImageHashes = $AdImageHashes;
    }
}