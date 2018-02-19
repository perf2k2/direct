<?php

namespace api\entities\campaigns\textcampaign;

class RelevantKeywordsSettingAdd
{
    protected $BudgetPercent;
    protected $Mode;
    protected $OptimizeGoalId;

    public function __construct($BudgetPercent)
    {
      $this->BudgetPercent = $BudgetPercent;
    }

    public function setBudgetPercent($BudgetPercent)
    {
      $this->BudgetPercent = $BudgetPercent;
      return $this;
    }

    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    public function setOptimizeGoalId($OptimizeGoalId)
    {
      $this->OptimizeGoalId = $OptimizeGoalId;
      return $this;
    }

}
