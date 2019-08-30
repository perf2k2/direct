<?php
declare(strict_types=1);

namespace perf2k2\direct\api\entities\keywordbids;

use perf2k2\direct\api\Entity;

class BiddingRule extends Entity
{
    protected $SearchByTrafficVolume;
    protected $NetworkByCoverage;

    public function setSearchByTrafficVolume(SearchByTrafficVolume $SearchByTrafficVolume)
    {
        $this->SearchByTrafficVolume = $SearchByTrafficVolume;
        return $this;
    }

    public function setNetworkByCoverage(NetworkByCoverage $NetworkByCoverage)
    {
        $this->NetworkByCoverage = $NetworkByCoverage;
        return $this;
    }
}