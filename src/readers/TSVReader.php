<?php
declare(strict_types=1);

namespace perf2k2\direct\readers;

use perf2k2\direct\exceptions\ReaderException;
use perf2k2\direct\transport\ReportResponse;

class TSVReader implements ReportReaderInterface
{
    private $response;
    private $reportName;
    private $headers;
    private $records;
    private $summary;

    public function parse(ReportResponse $response): ReportReaderInterface
    {
        $this->response = $response;
        $this->records = \array_slice(explode("\n", $response->getResult()), 0, -1); // Last line always empty

        if (!$response->getRequest()->isSkipReportHeader()) {
            $this->reportName = $this->records[0];
            $this->records = \array_slice($this->records, 1, \count($this->records));
        }

        if (!$response->getRequest()->isSkipColumnHeader()) {
            $this->headers = explode("\t", $this->records[0]);
            $this->records = \array_slice($this->records, 1, \count($this->records));
        }

        if (!$response->getRequest()->isSkipReportSummary()) {
            $this->summary = end($this->records);
            $this->records = \array_slice($this->records, 0, -1);
        }

        return $this;
    }

    public function getReportName(): string
    {
        if ($this->reportName === null) {
            throw new ReaderException('Report name not available');
        }

        return $this->reportName;
    }

    public function getHeaders(): array
    {
        if ($this->headers === null) {
            throw new ReaderException('Report headers not available');
        }

        return $this->headers;
    }

    public function getSummary(): string
    {
        if ($this->summary === null) {
            throw new ReaderException('Report summary not available');
        }

        return $this->summary;
    }

    public function asArray(): array
    {
        $array = [];

        foreach ($this as $value) {
            $array[] = str_getcsv($value, "\t");
        }

        return $array;
    }

    public function getResponse(): ReportResponse
    {
        return $this->response;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->records);
    }
}