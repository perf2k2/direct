<?php
declare(strict_types=1);

namespace perf2k2\direct\readers;

use perf2k2\direct\exceptions\WrapperException;
use perf2k2\direct\transport\Response;

class JsonReader implements ReferenceReaderInterface
{
    protected $response;
    protected $data;

    public function parse(Response $response): ReferenceReaderInterface
    {
        $this->response = $response;
        $this->data = \json_decode($response->getBody(), false);

        if ($this->data === null) {
            throw new WrapperException('Received json cannot be decoded');
        }

        if ($this->data->result === null) {
            throw new WrapperException('Empty result received');
        }

        return $this;
    }

    public function getResult(string $name = null)
    {
        if ($name === null) {
            return $this->data;
        }

        if (!property_exists($this->data->result, $name)) {
            throw new WrapperException("Entity '{$name}' not exists at response");
        }

        return $this->data->result->$name;
    }

    public function getResponse(): Response
    {
        return $this->response;
    }
}