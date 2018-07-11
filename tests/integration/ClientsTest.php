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
use direct\transport\Response;

class ClientsTest extends BaseTestCase {

    public function testGet()
    {
        $method = Clients::get()
            ->setFieldNames([
                ClientFieldEnum::Archived,
                ClientFieldEnum::CountryId,
                ClientFieldEnum::Currency
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testUpdate()
    {
        $method = Clients::update()
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
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}