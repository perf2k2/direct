<?php

namespace direct\api\entities\ads;

use direct\api\Entity;

class VideoExtensionAddItem extends Entity
{
    protected $CreativeId;

    public function setCreativeId(int $CreativeId)
    {
      $this->CreativeId = $CreativeId;
      return $this;
    }
}
