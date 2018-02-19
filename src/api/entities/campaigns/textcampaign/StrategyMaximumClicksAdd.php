<?php

namespace api\entities\campaigns\textcampaign;

class StrategyMaximumClicksAdd extends StrategyWeeklyBudgetAddBase
{

    public function __construct($WeeklySpendLimit)
    {
      parent::__construct($WeeklySpendLimit);
    }

}
