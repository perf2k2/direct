<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;

class VCardsAdd extends AddMethod
{
    protected $VCards;

    public function setVCards(array $VCards)
    {
        $this->VCards = $VCards;
        return $this;
    }
}