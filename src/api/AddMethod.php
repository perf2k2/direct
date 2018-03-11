<?php

namespace direct\api;

abstract class AddMethod extends AbstractMethod
{
    public function getApiName(): string
    {
        return 'add';
    }
}