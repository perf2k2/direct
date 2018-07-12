<?php

namespace direct\api;

abstract class ToggleMethod extends AbstractMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'toggle';
    }
}