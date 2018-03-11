<?php

namespace direct\api\methods;

use direct\api\AddMethod;


class AdGroupsAdd extends AddMethod
{
    protected $AdGroups;

    public function setAdGroups(array $AdGroups)
    {
        $this->AdGroups = $AdGroups;
        return $this;
    }
}