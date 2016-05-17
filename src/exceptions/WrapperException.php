<?php

namespace perf2k2\direct\exceptions;

class WrapperException extends \Exception
{
    public function __construct($message, $code = 0, \Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}