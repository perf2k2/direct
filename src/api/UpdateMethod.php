<?php

namespace perf2k2\direct\api;

abstract class UpdateMethod extends AbstractMethod
{
    public function getApiName(): string
    {
        return 'update';
    }
}