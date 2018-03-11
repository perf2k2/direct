<?php

namespace direct\api\entities\agencyclients;

use direct\api\entities\clients\ClientUpdateItem;

class AgencyClientUpdateItem extends ClientUpdateItem
{
    protected $ClientId;
    protected $Grants;
    
    public function __construct(int $ClientId)
    {
        $this->ClientId = $ClientId;
    }
    
    public function setGrants(array $Grants)
    {
        $this->Grants = $Grants;
        return $this;
    }
}