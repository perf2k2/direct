<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\clients\ClientSettingUpdateItem;
use perf2k2\direct\api\entities\clients\ClientUpdateItem;
use perf2k2\direct\api\entities\clients\EmailSubscriptionItem;
use perf2k2\direct\api\entities\clients\NotificationUpdate;
use perf2k2\direct\api\enums\clients\ClientFieldEnum;
use perf2k2\direct\api\enums\clients\ClientSettingUpdateEnum;
use perf2k2\direct\api\enums\clients\EmailSubscriptionEnum;
use perf2k2\direct\api\enums\LangEnum;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\facades\Clients;
use perf2k2\direct\transport\Response;

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
                    ->setSettings([new ClientSettingUpdateItem(ClientSettingUpdateEnum::CORRECT_TYPOS_AUTOMATICALLY(), YesNoEnum::NO())])
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}