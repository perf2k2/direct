<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\UpdateMethod;

class ClientsUpdate extends UpdateMethod
{
    protected $Clients;

    public function setClients(array $Clients)
    {
        $this->Clients = $Clients;
        return $this;
    }
}