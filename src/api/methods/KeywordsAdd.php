<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;


class KeywordsAdd extends AddMethod
{
    protected $Keywords;

    public function setKeywords(array $Keywords)
    {
        $this->Keywords = $Keywords;
        return $this;
    }
}