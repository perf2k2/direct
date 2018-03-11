<?php

namespace direct\api;

use direct\api\entities\IdsCriteria;

abstract class CriteriaMethod extends AbstractMethod
{
    protected $SelectionCriteria;

    public function setSelectionCriteria(IdsCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}