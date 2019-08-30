<?php
declare(strict_types=1);

namespace perf2k2\direct\transport;

class Response extends AbstractResponse
{
    private $units;
    private $body;

    public function __construct(Request $request, int $requestId, string $body, string $units = null)
    {
        $this->request = $request;
        $this->requestId = $requestId;
        $this->body = $body;
        $this->units = $units;
    }

    public function getRequestId(): int
    {
        return $this->requestId;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getUnits(): string
    {
        return $this->units;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }
}