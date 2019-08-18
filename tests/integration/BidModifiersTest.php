<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\bidmodifiers\BidModifierAddItem;
use perf2k2\direct\api\entities\bidmodifiers\BidModifierSetItem;
use perf2k2\direct\api\entities\bidmodifiers\BidModifiersSelectionCriteria;
use perf2k2\direct\api\entities\bidmodifiers\BidModifierToggleItem;
use perf2k2\direct\api\entities\bidmodifiers\DemographicsAdjustmentAdd;
use perf2k2\direct\api\entities\bidmodifiers\DesktopAdjustmentAdd;
use perf2k2\direct\api\entities\bidmodifiers\MobileAdjustmentAdd;
use perf2k2\direct\api\entities\bidmodifiers\RegionalAdjustmentAdd;
use perf2k2\direct\api\entities\bidmodifiers\RetargetingAdjustmentAdd;
use perf2k2\direct\api\entities\bidmodifiers\VideoAdjustmentAdd;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\ad\AdFieldEnum;
use perf2k2\direct\api\enums\bidmodifiers\BidModifierTypeEnum;
use perf2k2\direct\api\enums\bidmodifiers\DemographicsAdjustmentFieldNames;
use perf2k2\direct\api\enums\bidmodifiers\DesktopAdjustmentFieldEnum;
use perf2k2\direct\api\enums\bidmodifiers\MobileAdjustmentFieldNames;
use perf2k2\direct\api\enums\bidmodifiers\RetargetingAdjustmentFieldNames;
use perf2k2\direct\api\enums\YesNoEnum;
use perf2k2\direct\facades\BidModifiers;
use perf2k2\direct\transport\Response;

class BidModifiersTest extends BaseTestCase {

    public function testAdd()
    {
        $method = BidModifiers::add()
            ->setBidModifiers([
                (new BidModifierAddItem())
                    ->setCampaignId(1)
                    ->setAdGroupId(2)
                    ->setDesktopAdjustment(new DesktopAdjustmentAdd(1))
                    ->setDemographicsAdjustments([new DemographicsAdjustmentAdd(3)])
                    ->setMobileAdjustment(new MobileAdjustmentAdd(4))
                    ->setRegionalAdjustments([new RegionalAdjustmentAdd(5, 1)])
                    ->setRetargetingAdjustments([new RetargetingAdjustmentAdd(1, 1)])
                    ->setVideoAdjustment(new VideoAdjustmentAdd(2))
                    
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testDelete()
    {
        $method = BidModifiers::delete()
            ->setSelectionCriteria(
                (new IdsCriteria())
                    ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testGet()
    {
        $criteria = (new BidModifiersSelectionCriteria())
            ->setCampaignIds([1000]);

        $method = BidModifiers::get()
            ->setSelectionCriteria($criteria)
            ->setFieldNames([AdFieldEnum::Id, AdFieldEnum::State])
            ->setDemographicsAdjustmentFieldNames([
                DemographicsAdjustmentFieldNames::Age(),
            ])
            ->setMobileAdjustmentFieldNames([
                MobileAdjustmentFieldNames::BidModifier(),
            ])
            ->setRetargetingAdjustmentFieldNames([
                RetargetingAdjustmentFieldNames::Enabled(),
            ])
            ->setDesktopAdjustmentFieldNames([
                DesktopAdjustmentFieldEnum::BidModifier()
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testSet()
    {
        $method = BidModifiers::set()
            ->setBidModifiers([
                (new BidModifierSetItem())
                    ->setId(1)
                    ->setBidModifier(1)
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testToggle()
    {
        $method = BidModifiers::toggle()
            ->setBidModifierToggleItems([
                (new BidModifierToggleItem())
                    ->setAdGroupId(1)
                    ->setEnabled(YesNoEnum::YES)
                    ->setCampaignId(1)
                    ->setType(BidModifierTypeEnum::RETARGETING_ADJUSTMENT())
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}