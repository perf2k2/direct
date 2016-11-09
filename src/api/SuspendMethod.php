<?php

namespace perf2k2\direct\api;

use perf2k2\direct\api\entities\IdsCriteria;

class SuspendMethod extends Method implements MethodInterface
{
    public $SelectionCriteria;

    protected $apiName = 'suspend';

    public function setSelectionCriteria(IdsCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}