<?php

namespace perf2k2\direct\credentials;

class Credential implements CredentialInterface
{
    protected $authToken;
    protected $sandboxMasterToken;
    protected $clientLogin;

    public function __construct(string $authToken, string $clientLogin, string $sandboxMasterToken = null)
    {
        if (empty($authToken)) {
            throw new \InvalidArgumentException('OAuth token is empty');
        }

        if (empty($clientLogin)) {
            throw new \InvalidArgumentException('Client login is empty');
        }

        $this->authToken = $authToken;
        $this->sandboxMasterToken = $sandboxMasterToken;
        $this->clientLogin = $clientLogin;
    }

    public function getAuthToken(): string
    {
        return $this->authToken;
    }

    public function getSandboxMasterToken(): string
    {
        return $this->sandboxMasterToken;
    }

    public function getClientLogin(): string
    {
        return $this->clientLogin;
    }

    public function isSandboxMasterTokenSpecified(): bool
    {
        return !empty($this->sandboxMasterToken);
    }
}