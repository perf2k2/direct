<?php

namespace direct\api;

abstract class UpdateMethod extends AbstractMethod
{
    public function getApiName(): string
    {
        return 'update';
    }
}