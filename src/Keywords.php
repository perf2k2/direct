<?php

namespace perf2k2\direct;

use api\services\KeywordsService;
use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\KeywordsAdd;
use perf2k2\direct\api\methods\KeywordsGet;
use perf2k2\direct\api\methods\KeywordsUpdate;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SuspendMethod;

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