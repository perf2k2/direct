<?php

namespace api\entities\retargetinglists;

use perf2k2\direct\api\Entity;

class RetargetingListRuleArgumentItem extends Entity
{
    protected $ExternalId;
    protected $MembershipLifeSpan;
    
    public function __construct(int $ExternalId)
    {
        $this->ExternalId = $ExternalId;
    }
    
    public function setMembershipLifeSpan(int $MembershipLifeSpan)
    {
        $this->MembershipLifeSpan = $MembershipLifeSpan;
    }
}