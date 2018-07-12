<?php

namespace direct\api;

abstract class SetMethod extends AbstractMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'set';
    }
}