<?php

namespace direct\api\methods;

use direct\api\entities\agencyclients\AgencyClientsSelectionCriteria;
use direct\api\GetMethod;


class AgencyClientsGet extends GetMethod
{
    public function setSelectionCriteria(AgencyClientsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}