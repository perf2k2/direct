<?php

namespace direct\api\entities\ads;

class DynamicTextAdAdd extends TextAdAddBase
{
    protected $Text;

    public function __construct(string $Text)
    {
      $this->Text = $Text;
    }
}
