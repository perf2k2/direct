<?php
declare(strict_types=1);

namespace direct\transport;

use direct\api\AbstractMethod;
use direct\credentials\CredentialInterface;

class Client
{
    private $credential;
    
    public function __construct(CredentialInterface $credential)
    {
        $this->credential = $credential;
    }
    
    public function createRequest(AbstractMethod $method): Request
    {
        return $this->createRawRequest(
            $method->getServiceName(),
            $method->getApiName(),
            (new ParamsConverter($method->getData()))->toArray()
        );
    }
    
    public function createRawRequest(string $service, string $method, array $data)
    {
        return new Request(
            $this->credential->getClientLogin(),
            $this->credential->getAuthToken(),
            $service,
            $method,
            $data
        );
    }
}