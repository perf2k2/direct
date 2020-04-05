<?php

namespace perf2k2\direct\api\entities\ads;

use perf2k2\direct\api\enums\YesNoEnum;

class TextAdAdd extends TextAdAddBase
{
    protected $Text;
    protected $Title;
    protected $Title2;
    protected $Href;
    protected $Mobile;
    protected $DisplayUrlPath;
    protected $VideoExtension;

    public function __construct(string $Text, string $Title, YesNoEnum $Mobile)
    {
      $this->Text = $Text;
      $this->Title = $Title;
      $this->Mobile = $Mobile;
    }

    public function setTitle2(string $Title2): TextAdAdd
    {
      $this->Title2 = $Title2;
      return $this;
    }

    public function setHref(string $Href): TextAdAdd
    {
      $this->Href = $Href;
      return $this;
    }

    public function setDisplayUrlPath(string $DisplayUrlPath): TextAdAdd
    {
      $this->DisplayUrlPath = $DisplayUrlPath;
      return $this;
    }

    public function setVideoExtension(VideoExtensionAddItem $VideoExtension): TextAdAdd
    {
      $this->VideoExtension = $VideoExtension;
      return $this;
    }
}
