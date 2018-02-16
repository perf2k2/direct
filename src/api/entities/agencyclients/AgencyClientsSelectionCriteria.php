<?php

namespace api\entities\agencyclients;

use perf2k2\direct\api\Entity;

class AgencyClientsSelectionCriteria extends Entity
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