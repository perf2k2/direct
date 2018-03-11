<?php

namespace direct\api\entities\ads;

use direct\api\Entity;

class TextAdAddBase extends Entity
{
    protected $VCardId;
    protected $AdImageHash;
    protected $SitelinkSetId;
    protected $AdExtensionIds;

    public function setVCardId(int $VCardId)
    {
      $this->VCardId = $VCardId;
      return $this;
    }

    public function setAdImageHash(string $AdImageHash)
    {
      $this->AdImageHash = $AdImageHash;
      return $this;
    }

    public function setSitelinkSetId(int $SitelinkSetId)
    {
      $this->SitelinkSetId = $SitelinkSetId;
      return $this;
    }

    public function setAdExtensionIds(array $AdExtensionIds = [])
    {
      $this->AdExtensionIds = $AdExtensionIds;
      return $this;
    }
}
