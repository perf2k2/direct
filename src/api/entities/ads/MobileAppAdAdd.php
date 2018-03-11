<?php

namespace direct\api\entities\ads;

use direct\api\enums\ad\MobAppAgeLabelEnum;
use direct\api\enums\ad\MobileAppAdActionEnum;
use direct\api\Entity;

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
