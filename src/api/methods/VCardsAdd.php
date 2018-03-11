<?php

namespace direct\api\methods;

use direct\api\AddMethod;

class VCardsAdd extends AddMethod
{
    protected $VCards;

    public function setVCards(array $VCards)
    {
        $this->VCards = $VCards;
        return $this;
    }
}