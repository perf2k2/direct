<?php

namespace direct\api\methods;

use direct\api\UpdateMethod;

class ClientsUpdate extends UpdateMethod
{
    protected $Clients;

    public function setClients(array $Clients)
    {
        $this->Clients = $Clients;
        return $this;
    }
}