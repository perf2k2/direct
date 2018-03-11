<?php

namespace direct\api\entities\ads;

use direct\api\enums\YesNoEnum;

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

    public function setTitle2(string $Title2)
    {
      $this->Title2 = $Title2;
      return $this;
    }

    public function setHref(string $Href)
    {
      $this->Href = $Href;
      return $this;
    }

    public function setDisplayUrlPath(string $DisplayUrlPath)
    {
      $this->DisplayUrlPath = $DisplayUrlPath;
      return $this;
    }

    public function setVideoExtension(VideoExtensionAddItem $VideoExtension)
    {
      $this->VideoExtension = $VideoExtension;
      return $this;
    }
}
