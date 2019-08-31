<?php

namespace perf2k2\direct\facades;

use perf2k2\direct\api\methods\AdImagesDelete;
use perf2k2\direct\api\services\AdImagesService;
use perf2k2\direct\api\methods\AdImagesAdd;
use perf2k2\direct\api\methods\AdImagesGet;

class AdImages
{
    public static function add(): AdImagesAdd
    {
        return (new AdImagesService())->getAddMethod();
    }
    
    public static function delete(): AdImagesDelete
    {
        return (new AdImagesService())->getDeleteMethod();
    }
    
    public static function get(): AdImagesGet
    {
        return (new AdImagesService())->getGetMethod();
    }
}