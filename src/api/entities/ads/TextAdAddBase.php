<?php

namespace perf2k2\direct\api\entities\ads;

use perf2k2\direct\api\Entity;

class TextAdAddBase extends Entity
{
    protected $VCardId;
    protected $AdImageHash;
    protected $SitelinkSetId;
    protected $AdExtensionIds;

    public function setVCardId(int $VCardId): TextAdAddBase
    {
      $this->VCardId = $VCardId;
      return $this;
    }

    public function setAdImageHash(string $AdImageHash): TextAdAddBase
    {
      $this->AdImageHash = $AdImageHash;
      return $this;
    }

    public function setSitelinkSetId(int $SitelinkSetId): TextAdAddBase
    {
      $this->SitelinkSetId = $SitelinkSetId;
      return $this;
    }

    /**
     * @param int[] $AdExtensionIds
     * @return TextAdAddBase
     */
    public function setAdExtensionIds(array $AdExtensionIds = []): TextAdAddBase
    {
      $this->AdExtensionIds = $AdExtensionIds;
      return $this;
    }
}
