<?php
declare(strict_types=1);

namespace perf2k2\direct\api\entities\leads;

use perf2k2\direct\api\Entity;

class LeadsSelectionCriteria extends Entity
{
    protected $TurboPageIds;
    protected $DateTimeFrom;
    protected $DateTimeTo;

    /**
     * @param int[] $TurboPageIds
     */
    public function __construct(array $TurboPageIds)
    {
        $this->TurboPageIds = $TurboPageIds;
    }

    public function setDateTimeFrom(\DateTimeImmutable $DateTimeFrom)
    {
        $this->DateTimeFrom = $DateTimeFrom;
        return $this;
    }

    public function setDateTimeTo(\DateTimeImmutable $DateTimeTo)
    {
        $this->DateTimeTo = $DateTimeTo;
        return $this;
    }
}