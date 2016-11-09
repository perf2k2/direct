<?php

namespace perf2k2\direct\api;

use perf2k2\direct\api\entities\IdsCriteria;

class ArchiveMethod extends Method implements MethodInterface
{
    public $SelectionCriteria;

    protected $apiName = 'archive';

    public function setSelectionCriteria(IdsCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}