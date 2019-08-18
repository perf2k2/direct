<?php
declare(strict_types=1);

namespace perf2k2\direct\api\entities\keywordsresearch;

use perf2k2\direct\api\Entity;

class DeduplicateRequestItem extends Entity
{
    protected $Id;
    protected $Keyword;
    protected $Weight;

    public function __construct(string $Keyword)
    {
        $this->Keyword = $Keyword;
    }

    public function setId(int $Id)
    {
        $this->Id = $Id;
        return $this;
    }

    public function setWeight(int $Weight)
    {
        $this->Weight = $Weight;
        return $this;
    }
}