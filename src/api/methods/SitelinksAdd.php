<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;
use perf2k2\direct\api\MethodInterface;

class SitelinksAdd extends AddMethod implements MethodInterface
{
    public $SitelinksSets;

    public function setSitelinksSets(array $SitelinksSets)
    {
        $this->SitelinksSets = $SitelinksSets;
        return $this;
    }
}