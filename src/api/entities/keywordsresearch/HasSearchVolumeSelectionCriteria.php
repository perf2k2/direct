<?php

namespace api\entities\keywordsresearch;

use perf2k2\direct\api\Entity;

class HasSearchVolumeSelectionCriteria extends Entity
{
    protected $Keywords;
    protected $RegionIds;
    
    public function __construct(array $Keywords, array $RegionIds)
    {
        $this->Keywords = $Keywords;
        $this->RegionIds = $RegionIds;
    }
}