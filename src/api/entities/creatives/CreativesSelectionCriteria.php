<?php

namespace perf2k2\direct\api\entities\creatives;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\creatives\CreativeTypeEnum;

class CreativesSelectionCriteria extends Entity
{
    protected $Types;
    protected $Ids;

    /**
     * @param CreativeTypeEnum[] $Types
     * @return $this
     */
    public function setTypes(array $Types): self
    {
      $this->Types = $Types;
      return $this;
    }

    public function setIds(array $Ids): self
    {
      $this->Ids = $Ids;
      return $this;
    }
}
