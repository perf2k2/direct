<?php

namespace perf2k2\direct\v5;

class Response
{
    protected $result = [];

    public function __construct(string $result)
    {
        $decoded = $this->decode($result);
        $this->result = $decoded->result;
    }

    public function getResult($key = null)
    {
        if ($key === null) {
            return $this->result;
        } else {
            return $this->result->$key;
        }
    }

    public function decode(string $text): \stdClass
    {
        return json_decode($text);
    }
}