<?php

namespace perf2k2\direct\api\entities\adimages;

use perf2k2\direct\api\Entity;

class AdImageIdsCriteria extends Entity
{
    protected $AdImageHashes;

    /**
     * @param string[] $AdImageHashes
     */
    public function __construct(array $AdImageHashes)
    {
        $this->AdImageHashes = $AdImageHashes;
    }
}