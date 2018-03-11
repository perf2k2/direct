<?php

namespace direct\api\entities\keywordsresearch;

use direct\api\Entity;

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