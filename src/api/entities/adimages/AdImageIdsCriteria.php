<?php

namespace direct\api\entities\adimages;

use direct\api\Entity;

class AdImageIdsCriteria extends Entity
{
    protected $AdImageHashes;
    
    public function __construct(array $AdImageHashes)
    {
        $this->AdImageHashes = $AdImageHashes;
    }
}