<?php

namespace direct\api\entities\adgroups;

class DynamicTextAdGroupAdd
{
    protected $DomainUrl;
    
    public function __construct(string $DomainUrl)
    {
        $this->DomainUrl = $DomainUrl;
    }
}