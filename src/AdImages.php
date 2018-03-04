<?php

namespace perf2k2\direct;

use api\methods\AdImagesDelete;
use api\services\AdImagesService;
use perf2k2\direct\api\methods\AdImagesAdd;
use perf2k2\direct\api\methods\AdImagesGet;

class AdImages
{
    public static function add(): AdImagesAdd
    {
        return (new AdImagesService())->add();
    }
    
    public static function delete(): AdImagesDelete
    {
        return (new AdImagesService())->delete();
    }
    
    public static function get(): AdImagesGet
    {
        return (new AdImagesService())->get();
    }
}