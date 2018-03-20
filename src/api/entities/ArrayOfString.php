<?php

namespace direct\api\entities;

use direct\exceptions\WrapperException;

class ArrayOfString implements \JsonSerializable
{
    protected $array;
    
    public function __construct(array $array = [])
    {
        foreach ($array as $value) {
            if (!is_string($value)) {
                throw new WrapperException('ArrayOfString must contain only strings');
            }
        }
        
        $this->array = $array;
    }
    
    public function jsonSerialize()
    {
        return $this->array;
    }
}