<?php
declare(strict_types=1);

namespace api\entities\keywordbids;

use perf2k2\direct\api\Entity;

class NetworkByCoverage extends Entity
{
    protected $TargetCoverage;
    protected $IncreasePercent;
    protected $BidCeiling;

    public function __construct(int $TargetCoverage)
    {
        $this->TargetCoverage = $TargetCoverage;
    }

    public function setIncreasePercent(int $IncreasePercent)
    {
        $this->IncreasePercent = $IncreasePercent;
        return $this;
    }

    public function setBidCeiling(int $BidCeiling)
    {
        $this->BidCeiling = $BidCeiling;
        return $this;
    }
}