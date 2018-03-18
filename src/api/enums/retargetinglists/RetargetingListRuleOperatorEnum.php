<?php

namespace direct\api\enums\retargetinglists;

use direct\api\Enum;

/**
 * @method static RetargetingListRuleOperatorEnum ALL()
 * @method static RetargetingListRuleOperatorEnum ANY()
 * @method static RetargetingListRuleOperatorEnum NONE ()
 */
final class RetargetingListRuleOperatorEnum extends Enum
{
    const ALL = 'ALL';
    const ANY = 'ANY';
    const NONE  = 'NONE';
}