<?php

namespace perf2k2\direct\tests\integration;

use api\entities\clients\ClientSettingUpdateItem;
use api\entities\clients\ClientUpdateItem;
use api\entities\clients\EmailSubscriptionItem;
use api\entities\clients\NotificationUpdate;
use api\enums\clients\ClientFieldEnum;
use api\enums\clients\ClientSettingUpdateEnum;
use api\enums\clients\EmailSubscriptionEnum;
use api\enums\LangEnum;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\Clients;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

class ClientsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testGet()
    {
        $response = Clients::get()
            ->setFieldNames([
                ClientFieldEnum::Archived,
                ClientFieldEnum::CountryId,
                ClientFieldEnum::Currency
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testUpdate()
    {
        $response = Clients::update()
            ->setClients([
                (new ClientUpdateItem())
                    ->setClientInfo('info')
                    ->setNotification(
                        (new NotificationUpdate())
                            ->setEmail('email@test.ru')
                            ->setEmailSubscriptions([new EmailSubscriptionItem(EmailSubscriptionEnum::RECEIVE_RECOMMENDATIONS, YesNoEnum::YES)])
                            ->setLang(LangEnum::RU)
                    )
                    ->setPhone('81231231212')
                    ->setSettings([new ClientSettingUpdateItem(ClientSettingUpdateEnum::CORRECT_TYPOS_AUTOMATICALLY, YesNoEnum::NO)])
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}