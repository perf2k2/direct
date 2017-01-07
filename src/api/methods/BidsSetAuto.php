<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\MethodInterface;

class BidsSetAuto extends BidsSet implements MethodInterface
{
    public static function getApiName(): string
    {
        return 'setAuto';
    }
}