<?php
declare(strict_types=1);

namespace perf2k2\direct\helpers;

use perf2k2\direct\exceptions\WrapperException;
use perf2k2\direct\transport\ReportResponse;

class TSVReader  implements \IteratorAggregate
{
    private $reportName;
    private $headers;
    private $records;
    private $summary;

    public function __construct(
        string $string,
        bool $isSkipReportHeader,
        bool $isSkipColumnHeader,
        bool $isSkipReportSummary
    )
    {
        $this->records = \array_slice(explode("\n", $string), 0, -1); // Last line always empty

        if (!$isSkipReportHeader) {
            $this->reportName = $this->records[0];
            $this->records = \array_slice($this->records, 1, \count($this->records));
        }

        if (!$isSkipColumnHeader) {
            $this->headers = explode("\t", $this->records[0]);
            $this->records = \array_slice($this->records, 1, \count($this->records));
        }

        if (!$isSkipReportSummary) {
            $this->summary = end($this->records);
            $this->records = \array_slice($this->records, 0, -1);
        }
    }

    public static function fromResponse(ReportResponse $response): self
    {
        return new self(
            $response->getResult(),
            $response->getRequest()->isSkipReportHeader(),
            $response->getRequest()->isSkipColumnHeader(),
            $response->getRequest()->isSkipReportSummary()
        );
    }

    public function getReportName(): string
    {
        if ($this->reportName === null) {
            throw new WrapperException('Report name not available');
        }

        return $this->reportName;
    }

    public function getHeaders(): array
    {
        if ($this->headers === null) {
            throw new WrapperException('Report headers not available');
        }

        return $this->headers;
    }

    public function getSummary(): string
    {
        if ($this->summary === null) {
            throw new WrapperException('Report summary not available');
        }

        return $this->summary;
    }

    public function asArray(): array
    {
        $array = [];

        foreach ($this->each() as $value) {
            $array[] = $value;
        }

        return $array;
    }

    public function each(): \Generator
    {
        foreach ($this->records as $key => $value) {
            yield $key => str_getcsv($value, "\t");
        }
    }

    public function getIterator()
    {
        return $this->each();
    }
}