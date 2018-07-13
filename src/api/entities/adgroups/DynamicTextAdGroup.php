<?php

namespace perf2k2\direct\api\entities\adgroups;

use perf2k2\direct\api\Entity;

class DynamicTextAdGroup extends Entity
{
    protected $DomainUrl;

    public function __construct(string $DomainUrl)
    {
      $this->DomainUrl = $DomainUrl;
    }
}
