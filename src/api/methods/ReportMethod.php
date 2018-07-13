<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\reports\OrderBy;
use perf2k2\direct\api\entities\reports\Page;
use perf2k2\direct\api\entities\reports\SelectionCriteria;
use perf2k2\direct\api\enums\reports\DateRangeTypeEnum;
use perf2k2\direct\api\enums\reports\FormatEnum;
use perf2k2\direct\api\enums\reports\ReportTypeEnum;
use perf2k2\direct\api\AbstractMethod;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\api\MethodInterface;

class ReportMethod extends AbstractMethod implements MethodInterface
{
    protected $SelectionCriteria;
    protected $Goals;
    protected $AttributionModels;
    protected $FieldNames;
    protected $Page;
    protected $OrderBy;
    protected $ReportName;
    protected $ReportType;
    protected $DateRangeType;
    protected $Format;
    protected $IncludeVAT;
    protected $IncludeDiscount;

    public function setSelectionCriteria(SelectionCriteria $SelectionCriteria)
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }

    public function setGoals(array $Goals)
    {
        $this->Goals = $Goals;
        return $this;
    }

    public function setAttributionModels(array $AttributionModels)
    {
        $this->AttributionModels = $AttributionModels;
        return $this;
    }

    public function setFieldNames(array $FieldNames)
    {
        $this->FieldNames = $FieldNames;
        return $this;
    }

    public function setPage(Page $Page)
    {
        $this->Page = $Page;
        return $this;
    }

    public function setOrderBy(array $OrderBy)
    {
        $this->OrderBy = $OrderBy;
        return $this;
    }

    public function setReportName(string $ReportName)
    {
        $this->ReportName = $ReportName;
        return $this;
    }

    public function setReportType(ReportTypeEnum $ReportType)
    {
        $this->ReportType = $ReportType;
        return $this;
    }

    public function setDateRangeType(DateRangeTypeEnum $DateRangeType)
    {
        $this->DateRangeType = $DateRangeType;
        return $this;
    }

    public function setFormat(FormatEnum $Format)
    {
        $this->Format = $Format;
        return $this;
    }

    public function setIncludeVAT(YesNoEnum $IncludeVAT)
    {
        $this->IncludeVAT = $IncludeVAT;
        return $this;
    }

    public function setIncludeDiscount(YesNoEnum $IncludeDiscount)
    {
        $this->IncludeDiscount = $IncludeDiscount;
        return $this;
    }
}