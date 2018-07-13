<?php
declare(strict_types=1);

namespace perf2k2\direct\api\entities\reports;

use perf2k2\direct\api\Entity;

class Page extends Entity
{
    protected $Limit;

    public function __construct(int $Limit)
    {
        $this->Limit = $Limit;
    }
}