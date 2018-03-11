<?php

namespace direct\api\methods;


use direct\api\UpdateMethod;

class KeywordsUpdate extends UpdateMethod
{
    protected $Keywords;

    public function setKeywords(array $Keywords)
    {
        $this->Keywords = $Keywords;
        return $this;
    }
}