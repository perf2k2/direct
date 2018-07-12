<?php

namespace direct\api;

class SuspendMethod extends CriteriaMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'suspend';
    }
}