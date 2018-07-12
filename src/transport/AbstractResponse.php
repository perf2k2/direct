<?php
declare(strict_types=1);

namespace direct\transport;

abstract class AbstractResponse
{
    protected $requestId;
    protected $result;

    public function getRequestId(): int
    {
        return $this->requestId;
    }
}