<?php

namespace perf2k2\direct\api;

class ResumeMethod extends CriteriaMethod implements MethodInterface
{
    public static function getApiName(): string
    {
        return 'resume';
    }
}