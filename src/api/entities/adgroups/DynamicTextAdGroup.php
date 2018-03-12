<?php

namespace direct\api\entities\adgroups;

use direct\api\Entity;

class DynamicTextAdGroup extends Entity
{
    protected $DomainUrl;

    public function __construct(string $DomainUrl)
    {
      $this->DomainUrl = $DomainUrl;
    }
}
