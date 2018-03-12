<?php

namespace direct\api\entities\adgroups;

class AdGroupUpdateItem extends AdGroupBase
{
    protected $Id;
    protected $Name;
    protected $MobileAppAdGroup;
    protected $DynamicTextAdGroup;

    public function __construct(int $Id)
    {
      $this->Id = $Id;
    }

    public function setName(string $Name)
    {
      $this->Name = $Name;
      return $this;
    }

    public function setMobileAppAdGroup(MobileAppAdGroupUpdate $MobileAppAdGroup)
    {
      $this->MobileAppAdGroup = $MobileAppAdGroup;
      return $this;
    }

    public function setDynamicTextAdGroup(DynamicTextAdGroup $DynamicTextAdGroup)
    {
      $this->DynamicTextAdGroup = $DynamicTextAdGroup;
      return $this;
    }
}
