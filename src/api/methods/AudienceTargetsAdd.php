<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;
use perf2k2\direct\api\entities\audiencetargets\AudienceTargetAddItem;


class AudienceTargetsAdd extends AddMethod
{
    protected $AudienceTargets;

    /**
     * @param AudienceTargetAddItem[] $AudienceTargets
     * @return AudienceTargetsAdd
     */
    public function setAudienceTargets(array $AudienceTargets): AudienceTargetsAdd
    {
        $this->AudienceTargets = $AudienceTargets;
        return $this;
    }
}