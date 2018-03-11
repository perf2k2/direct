<?php

namespace direct\api\entities\ads;

use direct\api\Entity;

class AdBuilderAdAddBase extends Entity
{
    protected $Creative;

    public function __construct(AdBuilderAdAddItem $Creative)
    {
      $this->Creative = $Creative;
    }
}
