<?php

namespace direct\tests\integration;

use direct\api\entities\clients\ClientSettingUpdateItem;
use direct\api\entities\clients\ClientUpdateItem;
use direct\api\entities\clients\EmailSubscriptionItem;
use direct\api\entities\clients\NotificationUpdate;
use direct\api\enums\clients\ClientFieldEnum;
use direct\api\enums\clients\ClientSettingUpdateEnum;
use direct\api\enums\clients\EmailSubscriptionEnum;
use direct\api\enums\LangEnum;
use direct\api\enums\YesNoEnum;
use direct\Clients;
use direct\http\Response;
use direct\tests\stubs\FakeConnection;

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
                            ->setEmailSubscriptions([new EmailSubscriptionItem(EmailSubscriptionEnum::RECEIVE_RECOMMENDATIONS(), YesNoEnum::YES)])
                            ->setLang(LangEnum::RU)
                    )
                    ->setPhone('81231231212')
                    ->setSettings([new ClientSettingUpdateItem(ClientSettingUpdateEnum::CORRECT_TYPOS_AUTOMATICALLY(), YesNoEnum::NO)])
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}