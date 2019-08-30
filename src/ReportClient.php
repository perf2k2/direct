<?php
declare(strict_types=1);

namespace perf2k2\direct;

use perf2k2\direct\api\methods\ReportMethod;
use perf2k2\direct\api\services\ReportsService;
use perf2k2\direct\readers\ReportReaderInterface;
use perf2k2\direct\transport\Client as HttpClient;
use perf2k2\direct\transport\Connection;
use perf2k2\direct\transport\ReportResponse;

class ReportClient
{
    protected $httpClient;
    protected $connection;
    protected $reader;

    public function __construct(HttpClient $httpClient, Connection $connection, ReportReaderInterface $reader)
    {
        $this->httpClient = $httpClient;
        $this->connection = $connection;
        $this->reader = $reader;
    }

    public function send(ReportMethod $method): ReportResponse
    {
        return $this->connection->sendReport($this->httpClient->createReportRequest($method));
    }

    public function process(ReportMethod $method): ReportReaderInterface
    {
        return $this->reader->parse(
            $this->send($method)
        );
    }

    public function Reports(): ReportsService
    {
        return new ReportsService();
    }
}