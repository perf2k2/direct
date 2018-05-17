<?php

namespace direct\api;

abstract class Entity implements ApiParametrizedObjectInterface
{
    public function getData(): array
    {
        return get_object_vars($this);
    }
}