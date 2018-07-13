<?php

namespace perf2k2\direct\api;

class DeleteMethod extends CriteriaMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'delete';
    }
}