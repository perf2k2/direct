<?php
declare(strict_types=1);

namespace direct\transport;

class Response
{
    private $requestId;
    private $units;
    
    public function __construct(int $requestId, string $units)
    {
        $this->requestId = $requestId;
        $this->units = $units;
    }
    
    public function getRequestId(): int
    {
        return $this->requestId;
    }
    
    public function getUnits(): string
    {
        return $this->units;
    }
}