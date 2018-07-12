<?php
declare(strict_types=1);

namespace api\entities\reports;

use direct\api\Entity;

class Page extends Entity
{
    protected $Limit;

    public function __construct(int $Limit)
    {
        $this->Limit = $Limit;
    }
}