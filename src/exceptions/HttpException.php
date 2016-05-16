<?php

namespace perf2k2\direct\v5\exceptions;

class HttpException extends \Exception
{
    public function __construct($message, $code = 500, \Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}