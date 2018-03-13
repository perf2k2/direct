<?php

namespace direct\api\entities\keywords;

use direct\api\Entity;

class KeywordUpdateItem extends Entity
{
    protected $Id;
    protected $Keyword;
    protected $UserParam1;
    protected $UserParam2;

    public function __construct(int $Id)
    {
      $this->Id = $Id;
    }

    public function setKeyword(string $Keyword)
    {
      $this->Keyword = $Keyword;
      return $this;
    }

    public function setUserParam1(string $UserParam1 = null)
    {
      $this->UserParam1 = $UserParam1;
      return $this;
    }

    public function setUserParam2(string $UserParam2 = null)
    {
      $this->UserParam2 = $UserParam2;
      return $this;
    }
}
