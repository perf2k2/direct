<?php

namespace direct\api;

interface MethodInterface extends ApiParametrizedObjectInterface
{
    public function getServiceName(): string;
}