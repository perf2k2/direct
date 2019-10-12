<?php

namespace perf2k2\direct\api\entities\adgroups;

class DynamicTextAdGroup
{
    protected $DomainUrl;
    
    public function __construct(string $DomainUrl)
    {
        $this->DomainUrl = $DomainUrl;
    }
}