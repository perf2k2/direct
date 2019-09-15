<?php
declare(strict_types=1);

namespace perf2k2\direct\transport;

class Response extends AbstractResponse
{
    private $body;
    private $units;
    private $unitsUsedLogin;

    public function __construct(Request $request, int $requestId, string $body, string $units = null, string $unitsUsedLogin = null)
    {
        $this->request = $request;
        $this->requestId = $requestId;
        $this->body = $body;
        $this->units = $units;
        $this->unitsUsedLogin = $unitsUsedLogin;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getUnits(): string
    {
        return $this->units;
    }

    public function getUnitsUsedLogin(): string
    {
        return $this->unitsUsedLogin;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }
}