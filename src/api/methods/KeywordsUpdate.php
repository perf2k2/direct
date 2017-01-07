<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\MethodInterface;
use perf2k2\direct\api\UpdateMethod;

class KeywordsUpdate extends UpdateMethod implements MethodInterface
{
    protected $Keywords;

    public function setKeywords(array $Keywords)
    {
        $this->Keywords = $Keywords;
        return $this;
    }
}