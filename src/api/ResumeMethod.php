<?php

namespace perf2k2\direct\api;

abstract class ResumeMethod extends Method implements MethodInterface
{
    public static function getApiName(): string
    {
        return 'resume';
    }
}