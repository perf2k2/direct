<?php
declare(strict_types=1);

namespace direct\transport;

class Request extends AbstractRequest
{
    private $method;
    
    public function __construct(string $login, string $token, string $method, array $params)
    {
        parent::__construct($login, $token, $params);
        $this->method = $method;
    }
}