<?php

namespace perf2k2\direct\api\enums\agencyclients;

use perf2k2\direct\api\Enum;

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