<?php
declare(strict_types=1);

namespace perf2k2\direct\transport;

abstract class AbstractResponse
{
    protected $request;
    protected $requestId;
    protected $result;

    public function getRequestId(): int
    {
        return $this->requestId;
    }
}