<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\DeleteMethod;
use direct\api\methods\VCardsAdd;
use direct\api\methods\VCardsGet;

class VCardsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'vcards';
    }
    
    public function add(): VCardsAdd
    {
        return new VCardsAdd($this);
    }
    
    public function get(): VCardsGet
    {
        return new VCardsGet($this);
    }
    
    public function delete(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
}