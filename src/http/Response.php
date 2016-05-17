<?php

namespace perf2k2\direct\v5\http;

use perf2k2\direct\v5\exceptions\ApiException;
use perf2k2\direct\v5\exceptions\WrapperException;

class Response
{
    protected $result = [];

    public function __construct(string $result)
    {
        $decoded = $this->decode($result);

        if (isset($decoded->error)) {
            throw new ApiException(
                !empty($decoded->error->error_detail) ? $decoded->error->error_detail : $decoded->error->error_string,
                $decoded->error->error_code
            );
        }

        $this->result = $decoded->result;
    }

    public function getResult($key = null)
    {
        if ($key === null) {
            return $this->result;
        } else {
            if (!isset($this->result->$key)) {
                throw new WrapperException('Key ' . $key . ' does not exist in the API response');
            } else {
                return $this->result->$key;
            }
        }
    }

    public function decode(string $text): \stdClass
    {
        return json_decode($text);
    }
}