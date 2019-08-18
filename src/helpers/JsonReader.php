<?php
declare(strict_types=1);

namespace perf2k2\direct\helpers;

use perf2k2\direct\exceptions\WrapperException;

class JsonReader
{
    protected $body;
    protected $data;

    public function __construct(string $body)
    {
        $this->body = $body;
        $this->data = \json_decode($body, false);

        if ($this->data === null) {
            throw new WrapperException('Received json cannot be decoded');
        }
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