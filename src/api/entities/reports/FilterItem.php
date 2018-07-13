<?php
declare(strict_types=1);

namespace perf2k2\direct\api\entities\reports;

use perf2k2\direct\api\enums\reports\FieldEnum;
use perf2k2\direct\api\enums\reports\FilterOperatorEnum;
use perf2k2\direct\api\Entity;

class FilterItem extends Entity
{
    protected $Field;
    protected $Operator;
    protected $Values;

    public function __construct(FieldEnum $Field, FilterOperatorEnum $Operator, array $Values)
    {
        $this->Field = $Field;
        $this->Operator = $Operator;
        $this->Values = $Values;
    }
}