<?php

namespace perf2k2\direct;

use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\KeywordsAdd;
use perf2k2\direct\api\methods\KeywordsGet;
use perf2k2\direct\api\methods\KeywordsUpdate;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\SuspendMethod;

class Keywords
{
    public static function getApiName(): string
    {
        return 'keywords';
    }

    public static function add(): KeywordsAdd
    {
        return new KeywordsAdd(self::getApiName());
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod(self::getApiName());
    }

    public static function get(): KeywordsGet
    {
        return new KeywordsGet(self::getApiName());
    }

    public static function resume(): ResumeMethod
    {
        return new ResumeMethod(self::getApiName());
    }

    public static function suspend(): SuspendMethod
    {
        return new SuspendMethod(self::getApiName());
    }

    public static function update(): KeywordsUpdate
    {
        return new KeywordsUpdate(self::getApiName());
    }
}