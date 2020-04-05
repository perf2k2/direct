<?php

namespace perf2k2\direct\api\entities\agencyclients;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\YesNoEnum;

class AgencyClientsSelectionCriteria extends Entity
{
    protected $Logins;
    protected $Archived;

    /**
     * @param string[] $Logins
     * @return AgencyClientsSelectionCriteria
     */
    public function setLogins(array $Logins): AgencyClientsSelectionCriteria
    {
        $this->Logins = $Logins;
        return $this;
    }
    
    public function setArchived(YesNoEnum $Archived): AgencyClientsSelectionCriteria
    {
        $this->Archived = $Archived;
        return $this;
    }
}