<?php

namespace perf2k2\direct\api\enums\adextensions;

use perf2k2\direct\api\Enum;

/**
 * @method static AdExtensionFieldEnum Id()
 * @method static AdExtensionFieldEnum Type()
 * @method static AdExtensionFieldEnum Status()
 * @method static AdExtensionFieldEnum StatusClarification()
 * @method static AdExtensionFieldEnum Associated()
 */
class AdExtensionFieldEnum extends Enum
{
    const Id = 'Id';
    const Type = 'Type';
    const Status = 'Status';
    const StatusClarification = 'StatusClarification';
    const Associated = 'Associated';
}