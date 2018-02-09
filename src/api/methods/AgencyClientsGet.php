<?php

namespace perf2k2\direct\api\methods;

use api\entities\agencyclients\AgencyClientsSelectionCriteria;
use perf2k2\direct\api\GetMethod;
use perf2k2\direct\api\MethodInterface;

class AgencyClientsGet extends GetMethod implements MethodInterface
{
    public function setSelectionCriteria(AgencyClientsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}