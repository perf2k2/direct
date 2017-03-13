<?php

namespace perf2k2\direct\api;

abstract class ToggleMethod extends Method implements MethodInterface
{
    public static function getApiName(): string
    {
        return 'toggle';
    }
}