<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\MethodInterface;

class SitelinksDelete extends DeleteMethod implements MethodInterface
{
    protected $SelectionCriteria;

    public function setSelectionCriteria(IdsCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}