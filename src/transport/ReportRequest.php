<?php
declare(strict_types=1);

namespace direct\transport;

class ReportRequest extends AbstractRequest
{
    private $mode = 'auto';
    private $returnMoneyInMicros = false;
    private $skipReportHeader = true;
    private $skipColumnHeader = true;
    private $skipReportSummary = true;

    public function useOnlineMode(): ReportRequest
    {
        $this->mode = 'online';
        return $this;
    }

    public function useOfflineMode(): ReportRequest
    {
        $this->mode = 'offline';
        return $this;
    }

    public function resetMode(): ReportRequest
    {
        $this->mode = 'auto';
        return $this;
    }

    public function returnMoneyInMicros(bool $value): ReportRequest
    {
        $this->returnMoneyInMicros = $value;
        return $this;
    }

    public function skipReportHeader(bool $value): ReportRequest
    {
        $this->skipReportHeader = $value;
        return $this;
    }

    public function skipColumnHeader(bool $value): ReportRequest
    {
        $this->skipColumnHeader = $value;
        return $this;
    }

    public function skipReportSummary(bool $value): ReportRequest
    {
        $this->skipReportSummary = $value;
        return $this;
    }
}