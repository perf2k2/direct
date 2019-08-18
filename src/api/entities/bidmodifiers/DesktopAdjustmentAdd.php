<?php
declare(strict_types=1);

namespace perf2k2\direct\api\entities\bidmodifiers;

use perf2k2\direct\api\Entity;

class DesktopAdjustmentAdd extends Entity
{
    protected $BidModifier;

    public function __construct(int $BidModifier)
    {
        $this->BidModifier = $BidModifier;
    }
}