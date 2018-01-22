<?php

namespace api\entities\retargetinglists;

class RetargetingListRuleArgumentItem
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