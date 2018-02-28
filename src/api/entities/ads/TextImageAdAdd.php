<?php

namespace api\entities\ads;

class TextImageAdAdd extends ImageAdAddBase
{
    protected $Href;

    public function __construct(string $AdImageHash, string $Href)
    {
      parent::__construct($AdImageHash);
      $this->Href = $Href;
    }
}
