<?php

namespace direct\api\methods;


use direct\api\UpdateMethod;

class AdGroupsUpdate extends UpdateMethod 
{
    protected $AdGroups;

    public function setAdGroups(array $AdGroups)
    {
        $this->AdGroups = $AdGroups;
        return $this;
    }
}