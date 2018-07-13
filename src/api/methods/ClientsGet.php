<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AbstractMethod;
use perf2k2\direct\api\NamedMethodInterface;

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