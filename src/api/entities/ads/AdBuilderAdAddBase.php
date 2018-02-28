<?php

namespace api\entities\ads;

use perf2k2\direct\api\Entity;

class AdBuilderAdAddBase extends Entity
{
    protected $Creative;

    public function __construct(AdBuilderAdAddItem $Creative)
    {
      $this->Creative = $Creative;
    }
}
