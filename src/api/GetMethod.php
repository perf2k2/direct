<?php

namespace perf2k2\direct\api;

use perf2k2\direct\api\entities\LimitOffset;

abstract class GetMethod extends Method implements MethodInterface
{
    protected $SelectionCriteria;
    protected $FieldNames;
    protected $Page;

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