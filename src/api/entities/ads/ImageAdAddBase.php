<?php

namespace api\entities\ads;

use perf2k2\direct\api\Entity;

class ImageAdAddBase extends Entity
{
    protected $AdImageHash;

    public function __construct(string $AdImageHash)
    {
      $this->AdImageHash = $AdImageHash;
    }
}
