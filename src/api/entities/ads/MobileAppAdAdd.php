<?php

namespace api\entities\ads;

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

    public function __construct(string $Text, string $Title, $Action)
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

    public function setAgeLabel($AgeLabel)
    {
      $this->AgeLabel = $AgeLabel;
      return $this;
    }
}
