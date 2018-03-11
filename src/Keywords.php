<?php

namespace direct;

use direct\api\services\KeywordsService;
use direct\api\DeleteMethod;
use direct\api\methods\KeywordsAdd;
use direct\api\methods\KeywordsGet;
use direct\api\methods\KeywordsUpdate;
use direct\api\ResumeMethod;
use direct\api\SuspendMethod;

class Keywords
{
    public static function add(): KeywordsAdd
    {
        return (new KeywordsService())->add();
    }

    public static function delete(): DeleteMethod
    {
        return (new KeywordsService())->delete();
    }

    public static function get(): KeywordsGet
    {
        return (new KeywordsService())->get();
    }

    public static function resume(): ResumeMethod
    {
        return (new KeywordsService())->resume();
    }

    public static function suspend(): SuspendMethod
    {
        return (new KeywordsService())->suspend();
    }

    public static function update(): KeywordsUpdate
    {
        return (new KeywordsService())->update();
    }
}