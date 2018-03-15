<?php

namespace direct\api\enums\agencyclients;

use direct\api\Enum;

/**
 * @method static PrivilegeEnum EDIT_CAMPAIGNS()
 * @method static PrivilegeEnum IMPORT_XLS()
 * @method static PrivilegeEnum TRANSFER_MONEY()
 */
class PrivilegeEnum extends Enum
{
    const EDIT_CAMPAIGNS = 'EDIT_CAMPAIGNS';
    const IMPORT_XLS = 'IMPORT_XLS';
    const TRANSFER_MONEY = 'TRANSFER_MONEY';
}