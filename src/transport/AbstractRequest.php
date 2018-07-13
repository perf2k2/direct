<?php
declare(strict_types=1);

namespace perf2k2\direct\transport;

class AbstractRequest
{
    protected $login;
    protected $token;
    protected $language = 'ru';
    protected $service;
    protected $params;
    
    public function __construct(string $login, string $token, string $service, array $params)
    {
        $this->login = $login;
        $this->token = $token;
        $this->service = $service;
        $this->params = $params;
    }
    
    public function setLanguage(string $language)
    {
        $this->language = $language;
    }
    
    public function getService(): string
    {
        return $this->service;
    }
    
    public function getParams(): array
    {
        return $this->params;
    }
    
    public function getLogin(): string
    {
        return $this->login;
    }
    
    public function getToken(): string
    {
        return $this->token;
    }
    
    public function getLanguage(): string
    {
        return $this->language;
    }
}