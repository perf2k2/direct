<?php

namespace direct\api\methods;

use direct\api\AddMethod;


class AudienceTargetsAdd extends AddMethod
{
    protected $AudienceTargets;

    public function setAudienceTargets(array $AudienceTargets)
    {
        $this->AudienceTargets = $AudienceTargets;
        return $this;
    }
}