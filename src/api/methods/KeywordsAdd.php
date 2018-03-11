<?php

namespace direct\api\methods;

use direct\api\AddMethod;


class KeywordsAdd extends AddMethod
{
    protected $Keywords;

    public function setKeywords(array $Keywords)
    {
        $this->Keywords = $Keywords;
        return $this;
    }
}