<?php
declare(strict_types=1);

namespace direct\transport;

class Request extends AbstractRequest
{
    private $method;
    
    public function __construct(string $login, string $token, string $service, string $method, array $params)
    {
        parent::__construct($login, $token, $service, $params);
        $this->method = $method;
    }
    
    public function getMethod(): string
    {
        return $this->method;
    }
}