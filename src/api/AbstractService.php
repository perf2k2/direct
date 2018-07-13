<?php

namespace perf2k2\direct\api;

abstract class AbstractService implements ApiObjectInterface
{
    abstract public function getApiName(): string;
}