<?php

namespace api\entities\campaigns\textcampaign;

class RelevantKeywordsSettingAdd
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
