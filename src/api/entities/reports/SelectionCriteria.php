<?php
declare(strict_types=1);

namespace perf2k2\direct\api\entities\reports;

use perf2k2\direct\api\Entity;

class SelectionCriteria extends Entity
{
    protected $DateFrom;
    protected $DateTo;
    protected $Filter;

    public function setDateFrom(\DateTimeInterface $DateFrom)
    {
        $this->DateFrom = $DateFrom->format('Y-m-d');
        return $this;
    }

    public function setDateTo(\DateTimeInterface $DateTo)
    {
        $this->DateTo = $DateTo->format('Y-m-d');
        return $this;
    }

    public function setFilter(array $Filter)
    {
        $this->Filter = $Filter;
        return $this;
    }
}