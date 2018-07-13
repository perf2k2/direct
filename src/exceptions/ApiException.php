<?php

namespace perf2k2\direct\exceptions;

class ApiException extends \Exception
{
    public function __construct($message, $code , \Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}