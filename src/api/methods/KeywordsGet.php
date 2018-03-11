<?php

namespace direct\api\methods;

use direct\api\entities\keywords\KeywordsSelectionCriteria;
use direct\api\GetMethod;


class KeywordsGet extends GetMethod
{
    public function setSelectionCriteria(KeywordsSelectionCriteria $SelectionCriteria): self
    {
        $this->SelectionCriteria = $SelectionCriteria;
        return $this;
    }
}