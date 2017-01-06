<?php

namespace perf2k2\direct\api;

use perf2k2\direct\api\entities\IdsCriteria;

abstract class DeleteMethod extends Method implements MethodInterface
{
    protected $SelectionCriteria;

    public static function getApiName(): string
    {
        return 'delete';
    }

    public function setSelectionCriteria(IdsCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}