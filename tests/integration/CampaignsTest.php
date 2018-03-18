<?php

namespace direct\tests\integration;

use direct\api\entities\campaigns\CampaignAddItem;
use direct\api\entities\campaigns\DailyBudget;
use direct\api\entities\campaigns\EmailSettings;
use direct\api\entities\campaigns\Notification;
use direct\api\entities\campaigns\SmsSettings;
use direct\api\entities\campaigns\textcampaign\TextCampaignAddItem;
use direct\api\entities\campaigns\textcampaign\TextCampaignNetworkStrategyAdd;
use direct\api\entities\campaigns\textcampaign\TextCampaignSearchStrategyAdd;
use direct\api\entities\campaigns\textcampaign\TextCampaignStrategyAdd;
use direct\api\entities\campaigns\TimeTargetingAdd;
use direct\api\entities\campaigns\TimeTargetingOnPublicHolidays;
use direct\api\enums\campaign\DailyBudgetModeEnum;
use direct\api\enums\campaign\SmsEventsEnum;
use direct\api\enums\campaign\textcampaign\TextCampaignNetworkStrategyTypeEnum;
use direct\api\enums\campaign\textcampaign\TextCampaignSearchStrategyTypeEnum;
use direct\api\entities\campaigns\CampaignsSelectionCriteria;
use direct\api\entities\IdsCriteria;
use direct\api\enums\campaign\CampaignFieldEnum;
use direct\api\enums\YesNoEnum;
use direct\Campaigns;
use direct\http\Response;
use direct\tests\stubs\FakeConnection;

class CampaignsTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;
    
    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }
    
    public function testAdd()
    {
        $response = Campaigns::add()
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
                    ->setBlockedIps([])
                    ->setDailyBudget(new DailyBudget(1, DailyBudgetModeEnum::STANDARD()))
                    ->setEndDate('')
                    ->setExcludedSites([])
                    ->setNegativeKeywords([])
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
                            ->setSchedule([])
                    )
                    ->setTimeZone('')
            ])
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testArchive()
    {
        $response = Campaigns::archive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testDelete()
    {
        $response = Campaigns::delete()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testGet()
    {
        $response = Campaigns::get()
            ->setSelectionCriteria((new CampaignsSelectionCriteria()))
            ->setFieldNames([CampaignFieldEnum::Id, CampaignFieldEnum::Name(), CampaignFieldEnum::State()])
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testResume()
    {
        $response = Campaigns::resume()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testSuspend()
    {
        $response = Campaigns::suspend()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            )->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testUnarchive()
    {
        $response = Campaigns::unarchive()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
    
    public function testUpdate()
    {
        $response = Campaigns::update()
            ->setCampaigns([])
            ->createAndSendRequest(self::$connection);
        
        $this->assertInstanceOf(Response::class, $response);
    }
}
