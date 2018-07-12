<?php

namespace direct\api;

class ModerateMethod extends CriteriaMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'moderate';
    }
}