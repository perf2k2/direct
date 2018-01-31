<?php

namespace api\methods;

use perf2k2\direct\api\AddMethod;

class DynamicTextAdTargetsAdd extends AddMethod
{
    protected $Webpages;
    
    public function setWebpages(array $Webpages)
    {
        $this->Webpages = $Webpages;
        return $this;
    }
}