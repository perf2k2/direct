<?php

namespace direct\api\entities\adextensions;

use direct\api\Entity;

class AdExtensionsSelectionCriteria extends Entity
{
    protected $Ids;
    protected $Types;
    protected $States;
    protected $Statuses;
    protected $ModifiedSince;
    
    public function setIds(array $Ids)
    {
        $this->Ids = $Ids;
        return $this;
    }
    
    public function setTypes(array $Types)
    {
        $this->Types = $Types;
        return $this;
    }
    
    public function setStates(array $States)
    {
        $this->States = $States;
        return $this;
    }
    
    public function setStatuses(array $Statuses)
    {
        $this->Statuses = $Statuses;
        return $this;
    }
    
    public function setModifiedSince(string $ModifiedSince)
    {
        $this->ModifiedSince = $ModifiedSince;
        return $this;
    }
}