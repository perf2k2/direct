<?php
declare(strict_types=1);

namespace api\entities\reports;

use api\enums\reports\FieldEnum;
use api\enums\reports\OrderBySortOrderEnum;
use direct\api\Entity;

class OrderBy extends Entity
{
    protected $Field;
    protected $SortOrder;

    public function __construct(FieldEnum $Field, OrderBySortOrderEnum $SortOrder = null)
    {
        $this->Field = $Field;
        $this->SortOrder = $SortOrder;
    }
}