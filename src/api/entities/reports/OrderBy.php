<?php
declare(strict_types=1);

namespace perf2k2\direct\api\entities\reports;

use perf2k2\direct\api\enums\reports\FieldEnum;
use perf2k2\direct\api\enums\reports\OrderBySortOrderEnum;
use perf2k2\direct\api\Entity;

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