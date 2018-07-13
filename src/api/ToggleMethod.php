<?php

namespace perf2k2\direct\api;

abstract class ToggleMethod extends AbstractMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'toggle';
    }
}