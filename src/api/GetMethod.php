<?php

namespace perf2k2\direct\api;

use perf2k2\direct\api\entities\LimitOffset;

class GetMethod extends Method implements MethodInterface
{
    public $SelectionCriteria;
    public $FieldNames;
    public $Page;

    protected $apiName = 'get';

    public function __construct(string $serviceName)
    {
        $this->Page = new LimitOffset();
        parent::__construct($serviceName);
    }

    public function setFieldNames(array $FieldNames)
    {
        $this->FieldNames = $FieldNames;
        return $this;
    }

    public function setPage(LimitOffset $Page)
    {
        $this->Page = $Page;
        return $this;
    }
}