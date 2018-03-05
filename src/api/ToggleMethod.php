<?php

namespace perf2k2\direct\api;

abstract class ToggleMethod extends AbstractMethod
{
    public function getApiName(): string
    {
        return 'toggle';
    }
}