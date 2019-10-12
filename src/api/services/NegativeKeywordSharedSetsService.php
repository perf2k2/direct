<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\NegativeKeywordSharedSetsAdd;
use perf2k2\direct\api\methods\NegativeKeywordSharedSetsGet;
use perf2k2\direct\api\methods\NegativeKeywordSharedSetsUpdate;

class NegativeKeywordSharedSetsService extends AbstractService
{
    public function getApiName(): string
    {
        return 'negativekeywordsharedsets';
    }
    
    public function getAddMethod(): NegativeKeywordSharedSetsAdd
    {
        return new NegativeKeywordSharedSetsAdd($this);
    }

    public function getDeleteMethod(): DeleteMethod
    {
        return new DeleteMethod($this);
    }
    
    public function getGetMethod(): NegativeKeywordSharedSetsGet
    {
        return new NegativeKeywordSharedSetsGet($this);
    }

    public function getUpdateMethod(): NegativeKeywordSharedSetsUpdate
    {
        return new NegativeKeywordSharedSetsUpdate($this);
    }
}