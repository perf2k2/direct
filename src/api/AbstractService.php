<?php

namespace direct\api;

abstract class AbstractService implements ApiObjectInterface
{
    abstract public function getApiName(): string;
}