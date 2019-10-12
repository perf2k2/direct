<?php

namespace perf2k2\direct\api\entities;

use perf2k2\direct\exceptions\WrapperException;

class ArrayOfLong implements \JsonSerializable
{
    protected $array;
    
    public function __construct(array $array = [])
    {
        foreach ($array as $value) {
            if (!is_int($value)) {
                throw new WrapperException('ArrayOfLong must contain only integers');
            }
        }
        
        $this->array = $array;
    }
    
    public function jsonSerialize()
    {
        return $this->array;
    }
}