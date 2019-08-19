<?php

namespace perf2k2\direct\helpers;

use perf2k2\direct\transport\Response;

interface ReferenceReaderInterface
{
    public function parse(Response $response): self;

    public function getResult(string $name = null): array;
}