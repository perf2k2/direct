<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;
use perf2k2\direct\api\MethodInterface;

class AdGroupsAdd extends AddMethod implements MethodInterface
{
    protected $AdGroups;

    public function setAdGroups(array $AdGroups)
    {
        $this->AdGroups = $AdGroups;
        return $this;
    }
}