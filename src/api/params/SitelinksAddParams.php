<?php

namespace perf2k2\direct\api\params;

class SitelinksAddParams implements ParamsInterface
{
    public $SitelinksSets;

    public function setSitelinksSets(array $SitelinksSets)
    {
        $this->SitelinksSets = $SitelinksSets;
        return $this;
    }
}