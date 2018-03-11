<?php

namespace direct\api\entities\ads;

class TextAdBuilderAdAdd extends AdBuilderAdAddBase
{
    protected $Href;

    public function __construct(AdBuilderAdAddItem $Creative, string $Href)
    {
      parent::__construct($Creative);
      $this->Href = $Href;
    }
}
