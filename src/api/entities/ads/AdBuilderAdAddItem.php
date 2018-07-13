<?php

namespace perf2k2\direct\api\entities\ads;

use perf2k2\direct\api\Entity;

class AdBuilderAdAddItem extends Entity
{
    protected $CreativeId;

    public function __construct(int $CreativeId)
    {
      $this->CreativeId = $CreativeId;
    }
}
