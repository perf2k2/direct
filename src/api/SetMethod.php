<?php

namespace direct\api;

abstract class SetMethod extends AbstractMethod
{
    public function getApiName(): string
    {
        return 'set';
    }
}