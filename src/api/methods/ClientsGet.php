<?php

namespace direct\api\methods;

use direct\api\AbstractMethod;
use direct\api\NamedMethodInterface;

class ClientsGet extends AbstractMethod implements NamedMethodInterface
{
    protected $FieldNames;

    public function getApiName(): string
    {
        return 'get';
    }
    
    public function setFieldNames(array $FieldNames)
    {
        $this->FieldNames = $FieldNames;
        return $this;
    }
}