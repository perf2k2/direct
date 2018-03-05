<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;


class AdGroupsAdd extends AddMethod
{
    protected $AdGroups;

    public function setAdGroups(array $AdGroups)
    {
        $this->AdGroups = $AdGroups;
        return $this;
    }
}