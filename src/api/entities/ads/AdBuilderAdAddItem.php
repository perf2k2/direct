<?php

namespace direct\api\entities\ads;

use direct\api\Entity;

class AdBuilderAdAddItem extends Entity
{
    protected $CreativeId;

    public function __construct(int $CreativeId)
    {
      $this->CreativeId = $CreativeId;
    }
}
