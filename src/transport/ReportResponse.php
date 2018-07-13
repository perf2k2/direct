<?php
declare(strict_types=1);

namespace perf2k2\direct\transport;

use perf2k2\direct\exceptions\WrapperException;
use perf2k2\direct\transport\AbstractResponse;

class ReportResponse extends AbstractResponse
{
    private $code;
    private $retryIn;
    private $reportsInQueue;

    public function __construct(
        int $code,
        int $requestId,
        string $result,
        int $retryIn = null,
        int $reportsInQueue = null
    )
    {
        $this->code = $code;
        $this->requestId = $requestId;
        $this->result = $result;
        $this->retryIn = $retryIn;
        $this->reportsInQueue = $reportsInQueue;
    }

    public function isOfflineMode(): bool
    {
        return $this->retryIn !== null &&  $this->reportsInQueue !== null;
    }

    public function IsFormed(): bool
    {
        return $this->code === 200;
    }

    public function IsInQueue(): bool
    {
        return $this->code === 201;
    }

    public function IsProcessing(): bool
    {
        return $this->code === 202;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getResult(): string
    {
        return $this->result;
    }

    public function getRetryIn(): int
    {
        if ($this->retryIn === null) {
            throw new WrapperException('Header value "retryIn" available only in offline mode');
        }

        return $this->retryIn;
    }

    public function getReportsInQueue(): int
    {
        if ($this->reportsInQueue === null) {
            throw new WrapperException('Header value "reportsInQueue" available only in offline mode');
        }

        return $this->reportsInQueue;
    }
}