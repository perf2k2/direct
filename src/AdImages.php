<?php

namespace direct;

use direct\api\methods\AdImagesDelete;
use direct\api\services\AdImagesService;
use direct\api\methods\AdImagesAdd;
use direct\api\methods\AdImagesGet;

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