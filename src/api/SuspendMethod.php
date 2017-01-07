<?php

namespace perf2k2\direct\api;

class SuspendMethod extends CriteriaMethod implements MethodInterface
{
    public static function getApiName(): string
    {
        return 'suspend';
    }
}