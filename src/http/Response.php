<?php

namespace perf2k2\direct\http;

use perf2k2\direct\exceptions\ApiException;

class Response
{
    protected $result;

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

    public function getResult(string $key = null): array
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

    public function decode(string $text): \stdClass
    {
        return json_decode($text);
    }
}