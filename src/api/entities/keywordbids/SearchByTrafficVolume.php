<?php
declare(strict_types=1);

namespace api\entities\keywordbids;

use perf2k2\direct\api\Entity;

class SearchByTrafficVolume extends Entity
{
    protected $TargetTrafficVolume;
    protected $IncreasePercent;
    protected $BidCeiling;

    public function __construct(int $TargetTrafficVolume)
    {
        $this->TargetTrafficVolume = $TargetTrafficVolume;
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