<?php

namespace perf2k2\direct\api;

class SuspendMethod extends CriteriaMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'suspend';
    }
}