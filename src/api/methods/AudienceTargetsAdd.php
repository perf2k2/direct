<?php

namespace api\methods;

use perf2k2\direct\api\AddMethod;


class AudienceTargetsAdd extends AddMethod
{
    protected $AudienceTargets;

    public function setAudienceTargets(array $AudienceTargets)
    {
        $this->AudienceTargets = $AudienceTargets;
        return $this;
    }
}