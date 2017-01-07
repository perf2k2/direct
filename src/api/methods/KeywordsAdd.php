<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;
use perf2k2\direct\api\MethodInterface;

class KeywordsAdd extends AddMethod implements MethodInterface
{
    protected $Keywords;

    public function setKeywords(array $Keywords)
    {
        $this->Keywords = $Keywords;
        return $this;
    }
}