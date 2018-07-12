<?php
declare(strict_types=1);

namespace api\entities\reports;

use direct\api\Entity;

class SelectionCriteria extends Entity
{
    protected $DateFrom;
    protected $DateTo;
    protected $Filter;

    public function setDateFrom(\DateTimeImmutable $DateFrom)
    {
        $this->DateFrom = $DateFrom->format('Y-m-d');
        return $this;
    }

    public function setDateTo(\DateTimeImmutable $DateTo)
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