<?php

namespace direct\api\entities\bidmodifiers;

use direct\api\Entity;
use direct\api\enums\AgeRangeEnum;
use direct\api\enums\GenderEnum;

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
