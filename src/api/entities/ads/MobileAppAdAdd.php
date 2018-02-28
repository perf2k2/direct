<?php

namespace api\entities\ads;

use api\enums\ad\MobAppAgeLabelEnum;
use api\enums\ad\MobileAppAdActionEnum;
use perf2k2\direct\api\Entity;

class MobileAppAdAdd extends Entity
{
    protected $AdImageHash;
    protected $Text;
    protected $Title;
    protected $TrackingUrl;
    protected $Action;
    protected $Features;
    protected $AgeLabel;

    public function __construct(string $Text, string $Title, MobileAppAdActionEnum $Action)
    {
      $this->Text = $Text;
      $this->Title = $Title;
      $this->Action = $Action;
    }

    public function setAdImageHash(string $AdImageHash)
    {
      $this->AdImageHash = $AdImageHash;
      return $this;
    }

    public function setTrackingUrl(string $TrackingUrl)
    {
      $this->TrackingUrl = $TrackingUrl;
      return $this;
    }
    
    public function setFeatures(array $Features = [])
    {
      $this->Features = $Features;
      return $this;
    }

    public function setAgeLabel(MobAppAgeLabelEnum $AgeLabel)
    {
      $this->AgeLabel = $AgeLabel;
      return $this;
    }
}
