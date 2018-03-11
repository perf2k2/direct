<?php

namespace direct\api\services;

use direct\api\AbstractService;
use direct\api\methods\AdImagesDelete;
use direct\api\methods\AdImagesAdd;
use direct\api\methods\AdImagesGet;

class AdImagesService extends AbstractService
{
    public function getApiName(): string
    {
        return 'adimages';
    }
    
    public function add(): AdImagesAdd
    {
        return new AdImagesAdd($this);
    }
    
    public function delete(): AdImagesDelete
    {
        return new AdImagesDelete($this);
    }
    
    public function get(): AdImagesGet
    {
        return new AdImagesGet($this);
    }
}