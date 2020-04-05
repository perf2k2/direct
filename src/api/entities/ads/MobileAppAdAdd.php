<?php

namespace perf2k2\direct\api\entities\ads;

use perf2k2\direct\api\enums\ad\MobAppAgeLabelEnum;
use perf2k2\direct\api\enums\ad\MobileAppAdActionEnum;
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

    public function setAdImageHash(string $AdImageHash): MobileAppAdAdd
    {
      $this->AdImageHash = $AdImageHash;
      return $this;
    }

    public function setTrackingUrl(string $TrackingUrl): MobileAppAdAdd
    {
      $this->TrackingUrl = $TrackingUrl;
      return $this;
    }

    /**
     * @param MobileAppAdFeatureItem[] $Features
     * @return $this
     */
    public function setFeatures(array $Features = []): MobileAppAdAdd
    {
      $this->Features = $Features;
      return $this;
    }

    public function setAgeLabel(MobAppAgeLabelEnum $AgeLabel): MobileAppAdAdd
    {
      $this->AgeLabel = $AgeLabel;
      return $this;
    }
}
