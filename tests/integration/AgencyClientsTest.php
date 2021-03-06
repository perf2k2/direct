<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\agencyclients\AgencyClientsSelectionCriteria;
use perf2k2\direct\api\entities\agencyclients\AgencyClientUpdateItem;
use perf2k2\direct\api\entities\agencyclients\ClientSettingAddItem;
use perf2k2\direct\api\entities\agencyclients\GrantItem;
use perf2k2\direct\api\entities\agencyclients\NotificationAdd;
use perf2k2\direct\api\entities\clients\ClientSettingUpdateItem;
use perf2k2\direct\api\entities\clients\EmailSubscriptionItem;
use perf2k2\direct\api\entities\clients\NotificationUpdate;
use perf2k2\direct\api\enums\agencyclients\AgencyClientFieldEnum;
use perf2k2\direct\api\enums\agencyclients\ClientSettingAddEnum;
use perf2k2\direct\api\enums\agencyclients\PrivilegeEnum;
use perf2k2\direct\api\enums\clients\ClientSettingUpdateEnum;
use perf2k2\direct\api\enums\clients\EmailSubscriptionEnum;
use perf2k2\direct\api\enums\CurrencyEnum;
use perf2k2\direct\api\enums\LangEnum;
use perf2k2\direct\facades\AgencyClients;
use perf2k2\direct\api\entities\LimitOffset;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\transport\Response;

class AgencyClientsTest extends BaseTestCase {

    public function testGet()
    {
        $method = AgencyClients::get()
            ->setSelectionCriteria(
                (new AgencyClientsSelectionCriteria())
                    ->setLogins(['login'])
                    ->setArchived(YesNoEnum::YES)
            )
            ->setFieldNames([
                AgencyClientFieldEnum::AccountQuality(),
                AgencyClientFieldEnum::CountryId(),
                AgencyClientFieldEnum::Currency(),
            ])
            ->setPage(new LimitOffset(10));
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testUpdate()
    {
        $method = AgencyClients::update()
            ->setClients([
                (new AgencyClientUpdateItem(1))
                    ->setGrants([new GrantItem(PrivilegeEnum::IMPORT_XLS(), YesNoEnum::NO())])
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
    
    public function testAdd()
    {
        $method = AgencyClients::add()
            ->setLogin('login')
            ->setFirstName('first')
            ->setLastName('last')
            ->setCurrency(CurrencyEnum::EUR)
            ->setGrants([new GrantItem(PrivilegeEnum::EDIT_CAMPAIGNS(), YesNoEnum::YES())])
            ->setNotification(new NotificationAdd(LangEnum::EN, 'address@host.com', [new EmailSubscriptionItem(EmailSubscriptionEnum::TRACK_MANAGED_CAMPAIGNS(), YesNoEnum::NO)]))
            ->setSettings([new ClientSettingAddItem(ClientSettingAddEnum::DISPLAY_STORE_RATING(), YesNoEnum::NO)]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}