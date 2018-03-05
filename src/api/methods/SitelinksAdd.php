<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;


class SitelinksAdd extends AddMethod
{
    protected $SitelinksSets;

    public function setSitelinksSets(array $SitelinksSets)
    {
        $this->SitelinksSets = $SitelinksSets;
        return $this;
    }
}