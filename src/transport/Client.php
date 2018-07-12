<?php
declare(strict_types=1);

namespace direct\transport;

use direct\api\MethodInterface;
use direct\api\NamedMethodInterface;
use direct\credentials\CredentialInterface;

class Client
{
    private $credential;
    
    public function __construct(CredentialInterface $credential)
    {
        $this->credential = $credential;
    }
    
    public function createRequest(NamedMethodInterface $method): Request
    {
        return $this->createRawRequest(
            $method->getServiceName(),
            $method->getApiName(),
            (new ParamsConverter($method->getData()))->toArray()
        );
    }

    public function createReportRequest(MethodInterface $method): ReportRequest
    {
        return $this->createReportRawRequest(
            $method->getServiceName(),
            (new ParamsConverter($method->getData()))->toArray()
        );
    }
    
    public function createRawRequest(string $service, string $method, array $data): Request
    {
        return new Request(
            $this->credential->getClientLogin(),
            $this->credential->getAuthToken(),
            $service,
            $method,
            $data
        );
    }

    public function createReportRawRequest(string $service, array $data): ReportRequest
    {
        return new ReportRequest(
            $this->credential->getClientLogin(),
            $this->credential->getAuthToken(),
            $service,
            $data
        );
    }
}