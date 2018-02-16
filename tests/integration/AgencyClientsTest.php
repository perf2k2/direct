<?php

namespace perf2k2\direct\tests\integration;

use api\entities\agencyclients\AgencyClientsSelectionCriteria;
use api\entities\agencyclients\AgencyClientUpdateItem;
use api\entities\agencyclients\ClientSettingAddItem;
use api\entities\agencyclients\GrantItem;
use api\entities\agencyclients\NotificationAdd;
use api\entities\clients\ClientSettingUpdateItem;
use api\entities\clients\EmailSubscriptionItem;
use api\entities\clients\NotificationUpdate;
use api\enums\agencyclients\AgencyClientFieldEnum;
use api\enums\agencyclients\ClientSettingAddEnum;
use api\enums\agencyclients\PrivilegeEnum;
use api\enums\clients\ClientSettingUpdateEnum;
use api\enums\clients\EmailSubscriptionEnum;
use api\enums\CurrencyEnum;
use api\enums\LangEnum;
use perf2k2\direct\AgencyClients;
use perf2k2\direct\api\entities\LimitOffset;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\http\Response;
use perf2k2\direct\tests\stubs\FakeConnection;

class AgencyClientsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testGet()
    {
        $response = AgencyClients::get()
            ->setSelectionCriteria(
                (new AgencyClientsSelectionCriteria())
                    ->setLogins(['login'])
                    ->setArchived(YesNoEnum::YES)
            )
            ->setFieldNames([
                AgencyClientFieldEnum::AccountQuality,
                AgencyClientFieldEnum::CountryId,
                AgencyClientFieldEnum::Currency,
            ])
            ->setPage(new LimitOffset(10))
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testUpdate()
    {
        $response = AgencyClients::update()
            ->setClients([
                (new AgencyClientUpdateItem(1))
                    ->setGrants([new GrantItem(PrivilegeEnum::IMPORT_XLS, YesNoEnum::NO)])
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
    
    public function testAdd()
    {
        $response = AgencyClients::add()
            ->setLogin('login')
            ->setFirstName('first')
            ->setLastName('last')
            ->setCurrency(CurrencyEnum::EUR)
            ->setGrants([new GrantItem(PrivilegeEnum::EDIT_CAMPAIGNS, YesNoEnum::YES)])
            ->setNotification(new NotificationAdd(LangEnum::EN, 'address@host.com', [new EmailSubscriptionItem(EmailSubscriptionEnum::TRACK_MANAGED_CAMPAIGNS(), YesNoEnum::NO)]))
            ->setSettings([new ClientSettingAddItem(ClientSettingAddEnum::DISPLAY_STORE_RATING(), YesNoEnum::NO)])
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
}