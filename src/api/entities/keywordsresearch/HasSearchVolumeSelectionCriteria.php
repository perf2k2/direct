<?php

namespace api\entities\keywordsresearch;

use perf2k2\direct\api\JsonSerializable;

class HasSearchVolumeSelectionCriteria extends JsonSerializable
{
    protected $Keywords;
    protected $RegionIds;
    
    public function __construct(array $Keywords, array $RegionIds)
    {
        $this->Keywords = $Keywords;
        $this->RegionIds = $RegionIds;
    }
}