<?php

namespace direct\api\entities\ads;

use direct\api\Entity;

class ImageAdAddBase extends Entity
{
    protected $AdImageHash;

    public function __construct(string $AdImageHash)
    {
      $this->AdImageHash = $AdImageHash;
    }
}
