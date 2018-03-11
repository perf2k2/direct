<?php

namespace direct\credentials;

interface CredentialInterface
{
    public function getAuthToken(): string;

    public function getSandboxMasterToken(): string;

    public function getClientLogin(): string;

    public function isSandboxMasterTokenSpecified(): bool;
}