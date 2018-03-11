<?php

namespace direct\api\methods;

use direct\api\entities\IdsCriteria;
use direct\api\GetMethod;


class VCardsGet extends GetMethod
{
    public function setSelectionCriteria(IdsCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}