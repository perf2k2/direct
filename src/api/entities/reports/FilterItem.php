<?php
declare(strict_types=1);

namespace api\entities\reports;

use api\enums\reports\FieldEnum;
use api\enums\reports\FilterOperatorEnum;
use direct\api\Entity;

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