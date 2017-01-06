<?php

namespace perf2k2\direct\api;

use perf2k2\direct\api\entities\IdsCriteria;

abstract class UnarchiveMethod extends Method implements MethodInterface
{
    protected $SelectionCriteria;

    protected $apiName = 'unarchive';

    public function setSelectionCriteria(IdsCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}