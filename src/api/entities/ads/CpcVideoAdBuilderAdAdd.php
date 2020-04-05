<?php

namespace perf2k2\direct\api\entities\ads;

class CpcVideoAdBuilderAdAdd extends AdBuilderAdAddBase
{
    protected $Href;
    
    public function setHref(string $Href): CpcVideoAdBuilderAdAdd
    {
      $this->Href = $Href;
      return $this;
    }
}
