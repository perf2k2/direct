<?php

namespace api\methods;

use perf2k2\direct\api\Method;
use perf2k2\direct\api\MethodInterface;

class ClientsGet extends Method implements MethodInterface
{
    protected $FieldNames;

    public static function getApiName(): string
    {
        return 'get';
    }
    
    public function setFieldNames(array $FieldNames)
    {
        $this->FieldNames = $FieldNames;
        return $this;
    }
}