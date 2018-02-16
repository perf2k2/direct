<?php

namespace api\enums\clients;

use MyCLabs\Enum\Enum;

/**
 * @method static ClientSettingUpdateEnum CORRECT_TYPOS_AUTOMATICALLY()
 * @method static ClientSettingUpdateEnum DISPLAY_STORE_RATING()
 */
class ClientSettingUpdateEnum extends Enum
{
    const CORRECT_TYPOS_AUTOMATICALLY  = 'CORRECT_TYPOS_AUTOMATICALLY ';
    const DISPLAY_STORE_RATING = 'DISPLAY_STORE_RATING';
}