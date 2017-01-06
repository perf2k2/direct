<?php

namespace perf2k2\direct\api;

abstract class DeleteMethod extends Method implements MethodInterface
{
    public static function getApiName(): string
    {
        return 'delete';
    }
}