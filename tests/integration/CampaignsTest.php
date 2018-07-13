<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\enums\campaign\CampaignTypeEnum;
use perf2k2\direct\api\entities\ArrayOfString;
use perf2k2\direct\api\entities\campaigns\CampaignAddItem;
use perf2k2\direct\api\entities\campaigns\DailyBudget;
use perf2k2\direct\api\entities\campaigns\EmailSettings;
use perf2k2\direct\api\entities\campaigns\Notification;
use perf2k2\direct\api\entities\campaigns\SmsSettings;
use perf2k2\direct\api\entities\campaigns\textcampaign\TextCampaignAddItem;
use perf2k2\direct\api\entities\campaigns\textcampaign\TextCampaignNetworkStrategyAdd;
use perf2k2\direct\api\entities\campaigns\textcampaign\TextCampaignSearchStrategyAdd;
use perf2k2\direct\api\entities\campaigns\textcampaign\TextCampaignStrategyAdd;
use perf2k2\direct\api\entities\campaigns\TimeTargetingAdd;
use perf2k2\direct\api\entities\campaigns\TimeTargetingOnPublicHolidays;
use perf2k2\direct\api\enums\campaign\CampaignStateSelectionEnum;
use perf2k2\direct\api\enums\campaign\DailyBudgetModeEnum;
use perf2k2\direct\api\enums\campaign\SmsEventsEnum;
use perf2k2\direct\api\enums\campaign\textcampaign\TextCampaignNetworkStrategyTypeEnum;
use perf2k2\direct\api\enums\campaign\textcampaign\TextCampaignSearchStrategyTypeEnum;
use perf2k2\direct\api\entities\campaigns\CampaignsSelectionCriteria;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\campaign\CampaignFieldEnum;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\Campaigns;
use perf2k2\direct\transport\Response;

class CampaignsTest extends BaseTestCase {
    
    public function testAdd()
    {
        $method = Campaigns::add()
            ->setCampaigns([
                (new CampaignAddItem('Name', '2017-01-01'))
                    ->setNotification(
                        (new Notification())
                            ->setEmailSettings(
                                (new EmailSettings())
                                    ->setEmail('')
                                    ->setCheckPositionInterval(0)
                                    ->setSendAccountNews(YesNoEnum::YES())
                                    ->setSendWarnings(YesNoEnum::NO())
                                    ->setWarningBalance(0)
                            )
                            ->setSmsSettings(
                                (new SmsSettings())
                                    ->setEvents([SmsEventsEnum::MODERATION(), SmsEventsEnum::MONEY_OUT()])
                                    ->setTimeFrom('')
                                    ->setTimeTo('')
                            )
                    )
                    ->setClientInfo('')
                    ->setBlockedIps(new ArrayOfString())
                    ->setDailyBudget(new DailyBudget(1, DailyBudgetModeEnum::STANDARD()))
                    ->setEndDate('')
                    ->setExcludedSites(new ArrayOfString())
                    ->setNegativeKeywords(new ArrayOfString())
                    ->setTextCampaign(
                        new TextCampaignAddItem(
                            new TextCampaignStrategyAdd(
                                new TextCampaignSearchStrategyAdd(TextCampaignSearchStrategyTypeEnum::AVERAGE_CPC()),
                                new TextCampaignNetworkStrategyAdd(TextCampaignNetworkStrategyTypeEnum::AVERAGE_CPC())
                            )
                        )
                    )
                    ->setDynamicTextCampaign([])
                    ->setMobileAppCampaign([])
                    ->setTimeTargeting(
                        (new TimeTargetingAdd(YesNoEnum::YES()))
                            ->setHolidaysSchedule(
                                (new TimeTargetingOnPublicHolidays(YesNoEnum::NO()))
                                    ->setBidPercent(1)
                                    ->setEndHour(1)
                                    ->setStartHour(1)
                            )
                            ->setSchedule(new ArrayOfString(['text']))
                    )
                    ->setTimeZone('')
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testArchive()
    {
        $method = Campaigns::archive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testDelete()
    {
        $method = Campaigns::delete()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([]));
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testGet()
    {
        $method = Campaigns::get()
            ->setSelectionCriteria(
                (new CampaignsSelectionCriteria())
                    ->setTypes([CampaignTypeEnum::CPM_BANNER_CAMPAIGN(), CampaignTypeEnum::MOBILE_APP_CAMPAIGN()])
                    ->setStates([CampaignStateSelectionEnum::ON()])
            )
            ->setFieldNames([CampaignFieldEnum::Id, CampaignFieldEnum::Name(), CampaignFieldEnum::State()]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testResume()
    {
        $method = Campaigns::resume()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([]));
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testSuspend()
    {
        $method = Campaigns::suspend()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([]));
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testUnarchive()
    {
        $method = Campaigns::unarchive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
    
    public function testUpdate()
    {
        $method = Campaigns::update()
            ->setCampaigns([]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}
