<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\entities\sitelinks\Sitelink;
use perf2k2\direct\api\entities\sitelinks\SitelinksSetAddItem;
use perf2k2\direct\api\enums\sitelinks\SitelinksSetFieldEnum;
use perf2k2\direct\api\params\SitelinksAddParams;
use perf2k2\direct\api\params\SitelinksDeleteParams;
use perf2k2\direct\api\params\SitelinksGetParams;
use perf2k2\direct\http\Connection;

class SitelinksTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new Connection(__DIR__ . '/../../', true);
    }

    public function testAdd()
    {
        $response = Sitelinks::add((new SitelinksAddParams())
            ->setSitelinksSets([
                (new SitelinksSetAddItem())
                    ->setSiteLinks([
                        new Sitelink('Тестовая ссылка', 'http://www.yandex.ru/', 'Яндекс')
                    ]),
            ]),
            self::$connection
        );

        $result = $response->getResult('AddResults');

        $this->assertFalse(isset($result[0]->Warnings));
        $this->assertFalse(isset($result[0]->Errors));

        return $result[0]->Id;
    }

    /**
     * @depends testAdd
     */
    public function testGet($Id)
    {
        $response = Sitelinks::get((new SitelinksGetParams())
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([$Id])
            )
            ->setFieldNames([SitelinksSetFieldEnum::Sitelinks]),
            self::$connection
        );

        $sets = $response->getResult('SitelinksSets');

        $this->assertEquals('Тестовая ссылка', $sets[0]->Sitelinks[0]->Title);
    }

    /**
     * @depends testAdd
     */
    public function testDelete($Id)
    {
        $response = Sitelinks::delete((new SitelinksDeleteParams())
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([$Id])
            ),
            self::$connection
        );

        $result = $response->getResult('DeleteResults');

        $this->assertFalse(isset($result[0]->Warnings));
        $this->assertFalse(isset($result[0]->Errors));
    }
}
