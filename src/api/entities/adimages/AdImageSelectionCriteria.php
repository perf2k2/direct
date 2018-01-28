<?php

namespace api\entities\adimages;

class AdImageSelectionCriteria extends AdImageIdsCriteria
{
    protected $Associated;
    
    public function __construct()
    {
    }
    
    public function setAdImageHashes(array $AdImageHashes): self
    {
        $this->AdImageHashes = $AdImageHashes;
        return $this;
    }
    
    public function setAssociated(string $Associated): self
    {
        $this->Associated = $Associated;
        return $this;
    }
}