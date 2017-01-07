<?php

namespace perf2k2\direct;

use perf2k2\direct\api\methods\KeywordsAdd;
use perf2k2\direct\api\methods\KeywordsDelete;
use perf2k2\direct\api\methods\KeywordsGet;
use perf2k2\direct\api\methods\KeywordsResume;
use perf2k2\direct\api\methods\KeywordsSuspend;
use perf2k2\direct\api\methods\KeywordsUpdate;
use perf2k2\direct\api\Service;
use perf2k2\direct\api\ServiceInterface;

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

    public static function delete(): KeywordsDelete
    {
        return new KeywordsDelete((new self())->getApiName());
    }

    public static function get(): KeywordsGet
    {
        return new KeywordsGet((new self())->getApiName());
    }

    public static function resume(): KeywordsResume
    {
        return new KeywordsResume((new self())->getApiName());
    }

    public static function suspend(): KeywordsSuspend
    {
        return new KeywordsSuspend((new self())->getApiName());
    }

    public static function update(): KeywordsUpdate
    {
        return new KeywordsUpdate((new self())->getApiName());
    }
}