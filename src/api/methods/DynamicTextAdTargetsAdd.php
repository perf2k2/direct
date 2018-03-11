<?php

namespace direct\api\methods;

use direct\api\AddMethod;

class DynamicTextAdTargetsAdd extends AddMethod
{
    protected $Webpages;
    
    public function setWebpages(array $Webpages)
    {
        $this->Webpages = $Webpages;
        return $this;
    }
}