<?php

namespace perf2k2\direct\api\params;

use perf2k2\direct\api\entities\LimitOffset;

abstract class BaseParams
{
    public $SelectionCriteria;
    public $FieldNames;
    public $Page;

    public function __construct()
    {
        $this->Page = new LimitOffset();
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