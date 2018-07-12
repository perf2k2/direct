<?php

namespace direct\api;

class ResumeMethod extends CriteriaMethod implements NamedMethodInterface
{
    public function getApiName(): string
    {
        return 'resume';
    }
}