<?php

namespace perf2k2\direct\api;

abstract class UpdateMethod extends Method implements MethodInterface
{
    public static function getApiName(): string
    {
        return 'update';
    }
}