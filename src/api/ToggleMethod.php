<?php

namespace direct\api;

abstract class ToggleMethod extends AbstractMethod
{
    public function getApiName(): string
    {
        return 'toggle';
    }
}