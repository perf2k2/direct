<?php

namespace direct\api\methods;

use direct\api\AddMethod;


class SitelinksAdd extends AddMethod
{
    protected $SitelinksSets;

    public function setSitelinksSets(array $SitelinksSets)
    {
        $this->SitelinksSets = $SitelinksSets;
        return $this;
    }
}