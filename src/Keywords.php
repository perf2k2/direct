<?php

namespace perf2k2\direct;

use perf2k2\direct\api\DeleteMethod;
use perf2k2\direct\api\methods\KeywordsAdd;
use perf2k2\direct\api\methods\KeywordsGet;
use perf2k2\direct\api\methods\KeywordsUpdate;
use perf2k2\direct\api\ResumeMethod;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;
use perf2k2\direct\api\SuspendMethod;

class Keywords extends Service implements ServiceInterface
{
    public static function getApiName(): string
    {
        return 'keywords';
    }

    public static function add(): KeywordsAdd
    {
        return new KeywordsAdd((new self())->getApiName());
    }

    public static function delete(): DeleteMethod
    {
        return new DeleteMethod((new self())->getApiName());
    }

    public static function get(): KeywordsGet
    {
        return new KeywordsGet((new self())->getApiName());
    }

    public static function resume(): ResumeMethod
    {
        return new ResumeMethod((new self())->getApiName());
    }

    public static function suspend(): SuspendMethod
    {
        return new SuspendMethod((new self())->getApiName());
    }

    public static function update(): KeywordsUpdate
    {
        return new KeywordsUpdate((new self())->getApiName());
    }
}