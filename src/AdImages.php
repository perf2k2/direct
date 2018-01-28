<?php

namespace perf2k2\direct;

use api\methods\AdImagesDelete;
use perf2k2\direct\api\methods\AdImagesAdd;
use perf2k2\direct\api\methods\AdImagesGet;

class AdImages
{
    public static function getApiName(): string
    {
        return 'adimages';
    }

    public static function add(): AdImagesAdd
    {
        return new AdImagesAdd(self::getApiName());
    }
    
    public static function delete(): AdImagesDelete
    {
        return new AdImagesDelete(self::getApiName());
    }
    
    public static function get(): AdImagesGet
    {
        return new AdImagesGet(self::getApiName());
    }
}