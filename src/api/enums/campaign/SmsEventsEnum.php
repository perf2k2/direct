<?php

namespace api\enums\campaign;

use MyCLabs\Enum\Enum;

/**
 * @method static SmsEventsEnum MONITORING()
 * @method static SmsEventsEnum MODERATION()
 * @method static SmsEventsEnum MONEY_IN()
 * @method static SmsEventsEnum MONEY_OUT()
 * @method static SmsEventsEnum FINISHED()
 */
class SmsEventsEnum extends Enum
{
    const MONITORING = 'MONITORING';
    const MODERATION = 'MODERATION';
    const MONEY_IN = 'MONEY_IN';
    const MONEY_OUT = 'MONEY_OUT';
    const FINISHED = 'FINISHED';
}