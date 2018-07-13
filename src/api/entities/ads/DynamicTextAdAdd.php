<?php

namespace perf2k2\direct\api\entities\ads;

class DynamicTextAdAdd extends TextAdAddBase
{
    protected $Text;

    public function __construct(string $Text)
    {
      $this->Text = $Text;
    }
}
