<?php

namespace direct\api;

class ArchiveMethod extends CriteriaMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'archive';
    }
}