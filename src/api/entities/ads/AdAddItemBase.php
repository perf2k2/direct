<?php

namespace direct\api\entities\ads;

use direct\api\Entity;

class AdAddItemBase extends Entity
{
    protected $AdGroupId;

    public function __construct(int $AdGroupId)
    {
      $this->AdGroupId = $AdGroupId;
    }
}
