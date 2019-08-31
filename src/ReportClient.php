<?php
declare(strict_types=1);

namespace perf2k2\direct;

use perf2k2\direct\api\methods\ReportMethod;
use perf2k2\direct\api\services\ReportsService;
use perf2k2\direct\readers\ReportReaderInterface;
use perf2k2\direct\transport\Connection;
use perf2k2\direct\transport\ParamsConverter;
use perf2k2\direct\transport\ReportRequest;
use perf2k2\direct\transport\ReportResponse;

class ReportClient
{
    protected $connection;
    protected $reader;

    public function __construct(Connection $connection, ReportReaderInterface $reader)
    {
        $this->connection = $connection;
        $this->reader = $reader;
    }

    public function createRequest(ReportMethod $method): ReportRequest
    {
        return new ReportRequest(
            $this->connection->getCredential()->getClientLogin(),
            $this->connection->getCredential()->getAuthToken(),
            $method->getServiceName(),
            (new ParamsConverter($method->getData()))->toArray()
        );
    }

    public function sendRequest(ReportRequest $request): ReportResponse
    {
        return $this->connection->sendReport($request);
    }

    public function send(ReportMethod $method): ReportResponse
    {
        $request = $this->createRequest($method);
        return $this->connection->sendReport($request);
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