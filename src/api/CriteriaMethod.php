<?php

namespace perf2k2\direct\api;

use perf2k2\direct\api\entities\IdsCriteria;

abstract class CriteriaMethod extends Method implements MethodInterface
{
    protected $SelectionCriteria;

    public function setSelectionCriteria(IdsCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}