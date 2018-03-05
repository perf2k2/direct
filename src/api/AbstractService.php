<?php

namespace api;

use perf2k2\direct\api\ApiObjectInterface;

abstract class AbstractService implements ApiObjectInterface
{
    abstract public function getApiName(): string;
}