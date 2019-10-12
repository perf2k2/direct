<?php

namespace perf2k2\direct\api\entities\adimages;

use perf2k2\direct\api\Entity;
use perf2k2\direct\api\enums\YesNoEnum;

class AdImageSelectionCriteria extends Entity
{
    protected $AdImageHashes;
    protected $Associated;

    /**
     * @param string[] $AdImageHashes
     * @return AdImageSelectionCriteria
     */
    public function setAdImageHashes(array $AdImageHashes): AdImageSelectionCriteria
    {
        $this->AdImageHashes = $AdImageHashes;
        return $this;
    }

    public function setAssociated(YesNoEnum $Associated): AdImageSelectionCriteria
    {
        $this->Associated = $Associated;
        return $this;
    }
}