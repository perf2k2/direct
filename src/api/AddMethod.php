<?php

namespace perf2k2\direct\api;

abstract class AddMethod extends AbstractMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'add';
    }
}