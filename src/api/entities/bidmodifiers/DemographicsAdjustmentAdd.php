<?php

namespace perf2k2\direct\api\entities\bidmodifiers;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\AgeRangeEnum;
use perf2k2\direct\api\enums\GenderEnum;

class DemographicsAdjustmentAdd extends Entity
{
    protected $Gender;
    protected $Age;
    protected $BidModifier;

    public function __construct(int $BidModifier)
    {
      $this->BidModifier = $BidModifier;
    }

    public function setGender(GenderEnum $Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

    public function setAge(AgeRangeEnum $Age)
    {
      $this->Age = $Age;
      return $this;
    }

    public function setBidModifier(int $BidModifier)
    {
      $this->BidModifier = $BidModifier;
      return $this;
    }
}
