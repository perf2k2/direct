<?php

namespace api\entities\campaigns\textcampaign;

use perf2k2\direct\api\Entity;

class RelevantKeywordsSettingAdd extends Entity
{
    protected $BudgetPercent;
    protected $OptimizeGoalId;

    public function __construct(int $BudgetPercent)
    {
      $this->BudgetPercent = $BudgetPercent;
    }

    public function setOptimizeGoalId(int $OptimizeGoalId)
    {
      $this->OptimizeGoalId = $OptimizeGoalId;
      return $this;
    }

}
