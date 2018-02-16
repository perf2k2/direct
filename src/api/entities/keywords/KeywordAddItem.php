<?php

namespace api\entities\keywords;

use perf2k2\direct\api\Entity;

class KeywordAddItem extends Entity
{
    protected $Keyword;
    protected $AdGroupId;
    protected $Bid;
    protected $ContextBid;
    protected $StrategyPriority;
    protected $UserParam1;
    protected $UserParam2;
    
    public function __construct(string $Keyword, int $AdGroupId)
    {
        $this->Keyword = $Keyword;
        $this->AdGroupId = $AdGroupId;
    }
    
    public function setBid(int $Bid)
    {
        $this->Bid = $Bid;
        return $this;
    }
    
    public function setContextBid(int $ContextBid)
    {
        $this->ContextBid = $ContextBid;
        return $this;
    }
    
    public function setStrategyPriority(string $StrategyPriority)
    {
        $this->StrategyPriority = $StrategyPriority;
        return $this;
    }
    
    public function setUserParam1(string $UserParam1)
    {
        $this->UserParam1 = $UserParam1;
        return $this;
    }
    
    public function setUserParam2(string $UserParam2)
    {
        $this->UserParam2 = $UserParam2;
        return $this;
    }
}