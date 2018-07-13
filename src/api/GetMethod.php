<?php

namespace perf2k2\direct\api;

use perf2k2\direct\api\entities\LimitOffset;

abstract class GetMethod extends AbstractMethod implements NamedMethodInterface
{
    protected $SelectionCriteria;
    protected $FieldNames;
    protected $Page;

    public function __construct(AbstractService $service)
    {
        $this->Page = new LimitOffset();
        parent::__construct($service);
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