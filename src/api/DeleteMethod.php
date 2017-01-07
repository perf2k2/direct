<?php

namespace perf2k2\direct\api;

class DeleteMethod extends CriteriaMethod implements MethodInterface
{
    public static function getApiName(): string
    {
        return 'delete';
    }
}