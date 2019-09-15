<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\entities\creatives\CreativesSelectionCriteria;
use perf2k2\direct\api\enums\creatives\CpcVideoCreativeFieldEnum;
use perf2k2\direct\api\enums\creatives\CpmVideoCreativeFieldEnum;
use perf2k2\direct\api\enums\creatives\VideoExtensionCreativeFieldEnum;
use perf2k2\direct\api\GetMethod;

class CreativesGet extends GetMethod
{
    protected $VideoExtensionCreativeFieldNames = [];
    protected $CpcVideoCreativeFieldNames = [];
    protected $CpmVideoCreativeFieldNames = [];

    public function setSelectionCriteria(CreativesSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }

    /**
     * @param VideoExtensionCreativeFieldEnum[] $VideoExtensionCreativeFieldNames
     * @return $this
     */
    public function setVideoExtensionCreativeFieldNames(array $VideoExtensionCreativeFieldNames): self
    {
        $this->VideoExtensionCreativeFieldNames = $VideoExtensionCreativeFieldNames;
        return $this;
    }

    /**
     * @param CpcVideoCreativeFieldEnum[] $CpcVideoCreativeFieldNames
     * @return $this
     */
    public function setCpcVideoCreativeFieldNames(array $CpcVideoCreativeFieldNames): self
    {
        $this->CpcVideoCreativeFieldNames = $CpcVideoCreativeFieldNames;
        return $this;
    }

    /**
     * @param CpmVideoCreativeFieldEnum[] $CpmVideoCreativeFieldNames
     * @return $this
     */
    public function setCpmVideoCreativeFieldNames(array $CpmVideoCreativeFieldNames): self
    {
        $this->CpmVideoCreativeFieldNames = $CpmVideoCreativeFieldNames;
        return $this;
    }
}