<?php

namespace direct\api\methods;

use direct\api\AbstractMethod;


class ClientsGet extends AbstractMethod
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