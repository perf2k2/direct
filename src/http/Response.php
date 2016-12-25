<?php

namespace perf2k2\direct\http;

use perf2k2\direct\exceptions\ApiException;
use perf2k2\direct\exceptions\WrapperException;

class Response
{
    protected $result;

    public function __construct(string $result)
    {
        $decoded = json_decode($result);

        if ($decoded === null) {
            throw new WrapperException('Received json cannot be decoded');
        }

        if (isset($decoded->error)) {
            throw new ApiException(
                !empty($decoded->error->error_detail) ? $decoded->error->error_detail : $decoded->error->error_string,
                $decoded->error->error_code
            );
        }

        $this->result = $decoded->result;
    }

    public function getResult(string $key = null)
    {
        if ($key === null) {
            return $this->result;
        } else {
            return $this->result->$key ?? false;
        }
    }

    public function getList(): array
    {
        $array = get_object_vars($this->result);
        return current($array);
    }
}