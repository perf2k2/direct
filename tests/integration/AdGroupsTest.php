<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\adgroups\AdGroupAddItem;
use perf2k2\direct\api\entities\adgroups\AdGroupUpdateItem;
use perf2k2\direct\api\entities\adgroups\CpmBannerKeywordsAdGroupAdd;
use perf2k2\direct\api\entities\adgroups\CpmBannerUserProfileAdGroupAdd;
use perf2k2\direct\api\entities\adgroups\CpmVideoAdGroupAdd;
use perf2k2\direct\api\entities\adgroups\DynamicTextAdGroup;
use perf2k2\direct\api\entities\adgroups\MobileAppAdGroupAdd;
use perf2k2\direct\api\entities\adgroups\MobileAppAdGroupUpdate;
use perf2k2\direct\api\entities\ArrayOfLong;
use perf2k2\direct\api\entities\ArrayOfString;
use perf2k2\direct\api\enums\adgroups\AdGroupAppIconStatusSelectionEnum;
use perf2k2\direct\api\enums\adgroups\AdGroupTypesEnum;
use perf2k2\direct\api\enums\adgroups\CarrierEnum;
use perf2k2\direct\api\enums\keywordbids\ServingStatusEnum;
use perf2k2\direct\facades\AdGroups;
use perf2k2\direct\api\entities\adgroups\AdGroupsSelectionCriteria;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\enums\adgroups\AdGroupFieldEnum;
use perf2k2\direct\api\enums\adgroups\DynamicTextAdGroupFieldEnum;
use perf2k2\direct\api\enums\adgroups\DynamicTextFeedAdGroupFieldEnum;
use perf2k2\direct\api\enums\adgroups\MobileAppAdGroupFieldEnum;
use perf2k2\direct\api\enums\adgroups\AdGroupStatusSelectionEnum;
use perf2k2\direct\transport\Response;

class AdGroupsTest extends BaseTestCase
{
    public function testAdd()
    {
        $method = AdGroups::add()
            ->setAdGroups([
                (new AdGroupAddItem('Name', 1, [1, 2]))
                    ->setNegativeKeywords(new ArrayOfString(['word', 'word']))
                    ->setDynamicTextAdGroup(new DynamicTextAdGroup('url'))
                    ->setMobileAppAdGroup(new MobileAppAdGroupAdd('url', [], CarrierEnum::WI_FI_AND_CELLULAR(), '1'))
                    ->setTrackingParams('param')
                    ->setCpmBannerKeywordsAdGroup(new CpmBannerKeywordsAdGroupAdd())
                    ->setCpmBannerUserProfileAdGroup(new CpmBannerUserProfileAdGroupAdd())
                    ->setCpmVideoAdGroup(new CpmVideoAdGroupAdd())
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testDelete()
    {
        $method = AdGroups::delete()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            );
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testGet()
    {
        $method = AdGroups::get()
            ->setSelectionCriteria((new AdGroupsSelectionCriteria())
                ->setIds([])
                ->setStatuses([AdGroupStatusSelectionEnum::ACCEPTED()])
                ->setTypes([AdGroupTypesEnum::DYNAMIC_TEXT_AD_GROUP()])
                ->setServingStatuses([ServingStatusEnum::ACCEPTED()])
                ->setAppIconStatuses([AdGroupAppIconStatusSelectionEnum::MODERATION()])
                ->setNegativeKeywordSharedSetIds([1, 2, 3])
            )
            ->setFieldNames([
                AdGroupFieldEnum::Id(),
                AdGroupFieldEnum::Name(),
                AdGroupFieldEnum::Status()
            ])
            ->setMobileAppAdGroupFieldNames([
                MobileAppAdGroupFieldEnum::AppIconModeration()
            ])
            ->setDynamicTextFeedAdGroupFieldNames([
                DynamicTextFeedAdGroupFieldEnum::SourceType()
            ])
            ->setDynamicTextAdGroupFieldNames([
                DynamicTextAdGroupFieldEnum::DomainUrl()
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }

    public function testUpdate()
    {
        $method = AdGroups::update()
            ->setAdGroups([
                (new AdGroupUpdateItem(1))
                    ->setTrackingParams('params')
                    ->setName('name')
                    ->setRegionIds([1, 2])
                    ->setDynamicTextAdGroup(new DynamicTextAdGroup('url'))
                    ->setNegativeKeywords(new ArrayOfString(['', '']))
                    ->setNegativeKeywordSharedSetIds(new ArrayOfLong([1, 2]))
                    ->setMobileAppAdGroup(new MobileAppAdGroupUpdate())
            ]);
    
        $this->assertInstanceOf(Response::class, $this->createAndSendRequest($method));
    }
}
