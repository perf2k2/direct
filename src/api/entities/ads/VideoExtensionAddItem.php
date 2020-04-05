<?php

namespace perf2k2\direct\api\entities\ads;

use perf2k2\direct\api\Entity;

class VideoExtensionAddItem extends Entity
{
    protected $CreativeId;

    public function setCreativeId(int $CreativeId): VideoExtensionAddItem
    {
      $this->CreativeId = $CreativeId;
      return $this;
    }
}
