<?php
declare(strict_types=1);

namespace perf2k2\direct\readers;

use perf2k2\direct\exceptions\ReaderException;
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
            throw new ReaderException('Received json cannot be decoded');
        }

        if (property_exists($this->data, 'error')) {
            $msg = $this->data->error->error_string;

            if (property_exists($this->data->error, 'error_detail')) {
                $msg = $this->data->error->error_detail;
            }

            throw new ReaderException("API call returns error (code {$this->data->error->error_code}) on method \"{$response->getRequest()->getMethod()}\" of service \"{$response->getRequest()->getService()}\": {$msg}");
        }

        if ($this->data->result === null) {
            throw new ReaderException('Empty result received');
        }

        return $this;
    }

    public function getResult(string $name = null)
    {
        if ($name === null) {
            return $this->data;
        }

        if (!property_exists($this->data->result, $name)) {
            throw new ReaderException("Entity '{$name}' not exists at response");
        }

        return $this->data->result->$name;
    }

    public function getResponse(): Response
    {
        return $this->response;
    }
}