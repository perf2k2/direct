<?php

namespace perf2k2\direct\api;

class ResumeMethod extends CriteriaMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'resume';
    }
}