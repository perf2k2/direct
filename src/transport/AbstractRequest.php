<?php
declare(strict_types=1);

namespace perf2k2\direct\transport;

class AbstractRequest
{
    protected $service;
    protected $params;
    
    public function __construct(string $service, array $params)
    {
        $this->service = $service;
        $this->params = $params;
    }

    public function getService(): string
    {
        return $this->service;
    }
    
    public function getParams(): array
    {
        return $this->params;
    }
}