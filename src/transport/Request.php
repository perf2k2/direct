<?php
declare(strict_types=1);

namespace perf2k2\direct\transport;

class Request extends AbstractRequest
{
    private $method;
    
    public function __construct(string $service, string $method, array $params)
    {
        parent::__construct($service, $params);
        $this->method = $method;
    }
    
    public function getMethod(): string
    {
        return $this->method;
    }
}