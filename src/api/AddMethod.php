<?php

namespace direct\api;

abstract class AddMethod extends AbstractMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'add';
    }
}