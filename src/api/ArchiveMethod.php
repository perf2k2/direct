<?php

namespace perf2k2\direct\api;

class ArchiveMethod extends CriteriaMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'archive';
    }
}