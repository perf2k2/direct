<?php

namespace perf2k2\direct\api;

class UnarchiveMethod extends CriteriaMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'unarchive';
    }
}