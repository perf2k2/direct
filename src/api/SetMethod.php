<?php

namespace perf2k2\direct\api;

abstract class SetMethod extends AbstractMethod
{
    public function getApiName(): string
    {
        return 'set';
    }
}