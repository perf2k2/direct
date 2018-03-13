<?php

namespace direct\tests\integration;

use direct\api\entities\bidmodifiers\BidModifierAddItem;
use direct\api\entities\bidmodifiers\BidModifierSetItem;
use direct\api\entities\bidmodifiers\BidModifiersSelectionCriteria;
use direct\api\entities\bidmodifiers\BidModifierToggleItem;
use direct\api\entities\bidmodifiers\DemographicsAdjustmentAdd;
use direct\api\entities\bidmodifiers\MobileAdjustmentAdd;
use direct\api\entities\bidmodifiers\RegionalAdjustmentAdd;
use direct\api\entities\bidmodifiers\RetargetingAdjustmentAdd;
use direct\api\entities\bidmodifiers\VideoAdjustmentAdd;
use direct\api\entities\IdsCriteria;
use direct\api\entities\LimitOffset;
use direct\api\enums\ad\AdFieldEnum;
use direct\api\enums\bidmodifiers\BidModifierTypeEnum;
use direct\api\enums\bidmodifiers\DemographicsAdjustmentFieldNames;
use direct\api\enums\bidmodifiers\MobileAdjustmentFieldNames;
use direct\api\enums\bidmodifiers\RetargetingAdjustmentFieldNames;
use direct\api\enums\YesNoEnum;
use direct\BidModifiers;
use direct\http\Response;
use direct\tests\stubs\FakeConnection;

class BidModifiersTest extends \PHPUnit_Framework_TestCase
{
    protected static $connection;

    public static function setUpBeforeClass()
    {
        self::$connection = new FakeConnection();
    }

    public function testAdd()
    {
        $response = BidModifiers::add()
            ->setBidModifiers([
                (new BidModifierAddItem())
                    ->setCampaignId(1)
                    ->setAdGroupId(2)
                    ->setDemographicsAdjustments([new DemographicsAdjustmentAdd(3)])
                    ->setMobileAdjustment(new MobileAdjustmentAdd(4))
                    ->setRegionalAdjustments([new RegionalAdjustmentAdd(5, 1)])
                    ->setRetargetingAdjustments([new RetargetingAdjustmentAdd(1, 1)])
                    ->setVideoAdjustment(new VideoAdjustmentAdd(2))
                    
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testDelete()
    {
        $response = BidModifiers::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            )
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testGet()
    {
        $criteria = (new BidModifiersSelectionCriteria())
            ->setCampaignIds([1000]);

        $method = BidModifiers::get()
            ->setSelectionCriteria($criteria)
            ->setFieldNames([AdFieldEnum::Id, AdFieldEnum::State])
            ->setDemographicsAdjustmentFieldNames([
                DemographicsAdjustmentFieldNames::Age,
            ])
            ->setMobileAdjustmentFieldNames([
                MobileAdjustmentFieldNames::BidModifier,
            ])
            ->setRetargetingAdjustmentFieldNames([
                RetargetingAdjustmentFieldNames::Enabled,
            ]);


        $methodData = $method->getMethodData();

        $this->assertEquals([
            'CampaignIds' => [1000],
        ], $criteria->jsonSerialize());

        $this->assertEquals([
            'SelectionCriteria' =>  $criteria,
            'FieldNames' => ['Id', 'State'],
            'DemographicsAdjustmentFieldNames' => ['Age'],
            'MobileAdjustmentFieldNames' => ['BidModifier'],
            'RetargetingAdjustmentFieldNames' => ['Enabled'],
            'Page' => new LimitOffset(),
        ], $methodData);

        $response = $method->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testSet()
    {
        $response = BidModifiers::set()
            ->setBidModifiers([
                (new BidModifierSetItem())
                    ->setId(1)
                    ->setBidModifier(1)
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }

    public function testToggle()
    {
        $response = BidModifiers::toggle()
            ->setBidModifierToggleItems([
                (new BidModifierToggleItem())
                    ->setAdGroupId(1)
                    ->setEnabled(YesNoEnum::YES)
                    ->setCampaignId(1)
                    ->setType(BidModifierTypeEnum::RETARGETING_ADJUSTMENT)
            ])
            ->createAndSendRequest(self::$connection);

        $this->assertInstanceOf(Response::class, $response);
    }
}