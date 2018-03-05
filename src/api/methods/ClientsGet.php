<?php

namespace api\methods;

use perf2k2\direct\api\AbstractMethod;


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