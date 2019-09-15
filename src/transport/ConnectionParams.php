<?php
declare(strict_types=1);

namespace perf2k2\direct\transport;

class ConnectionParams
{
    protected $isSandbox = false;
    protected $acceptLanguage = self::ACCEPT_LANGUAGE_EN;
    protected $useOperatorUnits = false;

    const ACCEPT_LANGUAGE_EN = 'en';
    const ACCEPT_LANGUAGE_RU = 'ru';
    const ACCEPT_LANGUAGE_TR = 'tr';
    const ACCEPT_LANGUAGE_UK = 'uk';

    public function isSandbox(): bool
    {
        return $this->isSandbox;
    }

    public function setIsSandbox(bool $isSandbox)
    {
        $this->isSandbox = $isSandbox;
        return $this;
    }

    public function getAcceptLanguage(): string
    {
        return $this->acceptLanguage;
    }

    public function setAcceptLanguage(string $acceptLanguage)
    {
        $this->acceptLanguage = $acceptLanguage;
        return $this;
    }

    public function isUseOperatorUnits(): bool
    {
        return $this->useOperatorUnits;
    }

    public function setUseOperatorUnits(bool $UseOperatorUnits)
    {
        $this->useOperatorUnits = $UseOperatorUnits;
        return $this;
    }
}