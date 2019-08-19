<?php
declare(strict_types=1);

namespace perf2k2\direct\helpers;

use perf2k2\direct\exceptions\WrapperException;
use perf2k2\direct\transport\Response;

class JsonReader implements ReferenceReaderInterface
{
    protected $body;
    protected $data;

    public function parse(Response $response): ReferenceReaderInterface
    {
        $this->body = $response->getBody();
        $this->data = \json_decode($this->body, false);

        if ($this->data === null) {
            throw new WrapperException('Received json cannot be decoded');
        }

        return $this;
    }

    /**
     * @param string|null $name Entity name for return (if not specified, returns all result data)
     * @return array Array of entities or entity data
     * @throws WrapperException
     */
    public function getResult(string $name = null): array
    {
        if ($name === null) {
            return $this->data;
        }

        if (!property_exists($this->data->result, $name)) {
            throw new WrapperException("Entity '{$name}' not exists at response");
        }

        return $this->data->result->$name;
    }
}