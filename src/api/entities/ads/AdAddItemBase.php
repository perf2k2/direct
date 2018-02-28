<?php

namespace api\entities\ads;

use perf2k2\direct\api\Entity;

class AdAddItemBase extends Entity
{
    protected $AdGroupId;

    public function __construct(int $AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
    }
}
