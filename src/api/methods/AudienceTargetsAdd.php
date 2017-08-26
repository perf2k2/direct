<?php

namespace api\methods;

use perf2k2\direct\api\AddMethod;
use perf2k2\direct\api\MethodInterface;

class AudienceTargetsAdd extends AddMethod implements MethodInterface
{
    protected $AudienceTargets;

    public function setAudienceTargets(array $AudienceTargets)
    {
        $this->AudienceTargets = $AudienceTargets;
        return $this;
    }
}