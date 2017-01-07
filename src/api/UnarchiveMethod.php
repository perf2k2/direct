<?php

namespace perf2k2\direct\api;

class UnarchiveMethod extends CriteriaMethod implements MethodInterface
{
    public static function getApiName(): string
    {
        return 'unarchive';
    }
}