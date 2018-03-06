<?php

namespace api\services;

use api\AbstractService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\VCardsAdd;
use perf2k2\direct\api\methods\VCardsGet;

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