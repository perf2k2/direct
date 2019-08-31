<?php

namespace perf2k2\direct\api\services;

use perf2k2\direct\api\AbstractService;
use perf2k2\direct\api\methods\AdImagesDelete;
use perf2k2\direct\api\methods\AdImagesAdd;
use perf2k2\direct\api\methods\AdImagesGet;

class AdImagesService extends AbstractService
{
    public function getApiName(): string
    {
        return 'adimages';
    }
    
    public function getAddMethod(): AdImagesAdd
    {
        return new AdImagesAdd($this);
    }
    
    public function getDeleteMethod(): AdImagesDelete
    {
        return new AdImagesDelete($this);
    }
    
    public function getGetMethod(): AdImagesGet
    {
        return new AdImagesGet($this);
    }
}