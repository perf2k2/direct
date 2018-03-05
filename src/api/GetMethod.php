<?php

namespace perf2k2\direct\api;

use perf2k2\direct\api\entities\LimitOffset;

abstract class GetMethod extends AbstractMethod
{
    protected $SelectionCriteria;
    protected $FieldNames;
    protected $Page;

    public function __construct(string $serviceName)
    {
        $this->Page = new LimitOffset();
        parent::__construct($serviceName);
    }

    public function getApiName(): string
    {
        return 'get';
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