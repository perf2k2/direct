<?php

namespace direct\api;

class DeleteMethod extends CriteriaMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'delete';
    }
}