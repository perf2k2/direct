<?php

namespace api\entities\agencyclients;

use perf2k2\direct\api\JsonSerializable;

class AgencyClientsSelectionCriteria extends JsonSerializable
{
    protected $Logins;
    protected $Archived;
    
    public function setLogins(array $Logins)
    {
        $this->Logins = $Logins;
        return $this;
    }
    
    public function setArchived(string $Archived)
    {
        $this->Archived = $Archived;
        return $this;
    }
}