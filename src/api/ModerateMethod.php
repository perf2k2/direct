<?php

namespace perf2k2\direct\api;

class ModerateMethod extends CriteriaMethod implements MethodInterface
{
    public static function getApiName(): string
    {
        return 'moderate';
    }
}