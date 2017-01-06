<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\MethodInterface;
use perf2k2\direct\api\UpdateMethod;

class AdGroupsUpdate extends UpdateMethod  implements MethodInterface
{
    protected $AdGroups;

    public function setAdGroups(array $AdGroups)
    {
        $this->AdGroups = $AdGroups;
        return $this;
    }
}