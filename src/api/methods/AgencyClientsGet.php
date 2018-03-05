<?php

namespace perf2k2\direct\api\methods;

use api\entities\agencyclients\AgencyClientsSelectionCriteria;
use perf2k2\direct\api\GetMethod;


class AgencyClientsGet extends GetMethod
{
    public function setSelectionCriteria(AgencyClientsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}