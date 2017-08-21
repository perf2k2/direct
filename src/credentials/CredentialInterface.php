<?php

namespace perf2k2\direct\credentials;

interface CredentialInterface
{
    public function getAuthToken(): string;

    public function getSandboxMasterToken(): string;

    public function getClientLogin(): string;

    public function isSandboxMasterTokenSpecified(): bool;
}