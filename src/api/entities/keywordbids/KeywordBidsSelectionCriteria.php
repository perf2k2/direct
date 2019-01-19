<?php
declare(strict_types=1);

namespace api\entities\keywordbids;

use api\enums\keywordbids\ServingStatusEnum;
use perf2k2\direct\api\Entity;

class KeywordBidsSelectionCriteria extends Entity
{
    protected $CampaignIds = [];
    protected $AdGroupIds = [];
    protected $KeywordIds = [];
    protected $ServingStatuses = [];

    public function setCampaignIds(array $CampaignIds)
    {
        $this->CampaignIds = $CampaignIds;
        return $this;
    }

    public function setAdGroupIds(array $AdGroupIds)
    {
        $this->AdGroupIds = $AdGroupIds;
        return $this;
    }

    public function setKeywordIds(array $KeywordIds)
    {
        $this->KeywordIds = $KeywordIds;
        return $this;
    }

    /**
     * @param ServingStatusEnum[] $ServingStatuses
     * @return $this
     */
    public function setServingStatuses(array $ServingStatuses)
    {
        $this->ServingStatuses = $ServingStatuses;
        return $this;
    }
}