<?php

namespace perf2k2\direct\api;

interface MethodInterface extends ApiParametrizedObjectInterface
{
    public function getServiceName(): string;
}