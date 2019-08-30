<?php

namespace perf2k2\direct\readers;

use perf2k2\direct\exceptions\WrapperException;
use perf2k2\direct\transport\Response;

interface ReferenceReaderInterface
{
    /**
     * @param Response $response Response instance
     * @return ReferenceReaderInterface
     */
    public function parse(Response $response): self;

    /**
     * @param string|null $name Entity name for return (if not specified, returns all result data)
     * @return mixed Array of entities or entity data
     * @throws WrapperException
     */
    public function getResult(string $name = null);

    public function getResponse(): Response;
}