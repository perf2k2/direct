<?php
declare(strict_types=1);

namespace perf2k2\direct\readers;

use perf2k2\direct\transport\ReportResponse;

interface ReportReaderInterface extends \IteratorAggregate
{
    public function parse(ReportResponse $response): ReportReaderInterface;

    public function getReportName(): string;

    public function getHeaders(): array;

    public function getSummary(): string;

    public function asArray(): array;
}