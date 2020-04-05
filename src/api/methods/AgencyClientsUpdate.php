<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\agencyclients\AgencyClientUpdateItem;
use perf2k2\direct\api\UpdateMethod;

class AgencyClientsUpdate extends UpdateMethod
{
    protected $Clients;

    /**
     * @param AgencyClientUpdateItem[] $Clients
     * @return AgencyClientsUpdate
     */
    public function setClients(array $Clients): AgencyClientsUpdate
    {
        $this->Clients = $Clients;
        return $this;
    }
}