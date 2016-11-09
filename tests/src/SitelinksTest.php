<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\entities\sitelinks\Sitelink;
use perf2k2\direct\api\entities\sitelinks\SitelinksSetAddItem;
use perf2k2\direct\api\enums\sitelinks\SitelinksSetFieldEnum;
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
        $response = Sitelinks::add()
            ->setSitelinksSets([
                (new SitelinksSetAddItem())
                    ->setSiteLinks([
                        new Sitelink('Тестовая ссылка 2', 'http://www.yandex.ru/', 'Яндекс')
                    ]),
            ])
            ->sendRequest(self::$connection);

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
        $response = Sitelinks::get()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([$Id])
            )
            ->setFieldNames([SitelinksSetFieldEnum::Sitelinks])
            ->sendRequest(self::$connection);

        $sets = $response->getResult('SitelinksSets');

        $this->assertEquals('Тестовая ссылка 2', $sets[0]->Sitelinks[0]->Title);
    }

    /**
     * @depends testAdd
     */
    public function testDelete($Id)
    {
        $response = Sitelinks::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([$Id])
            )
            ->sendRequest(self::$connection);

        $result = $response->getResult('DeleteResults');

        $this->assertEquals($Id, $result[0]->Id);
    }
}
