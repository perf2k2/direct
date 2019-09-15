<?php
declare(strict_types=1);

namespace perf2k2\direct\api\enums\leads;

use perf2k2\direct\api\Enum;

/**
 * @method static LeadFieldEnum SubmittedAt()
 * @method static LeadFieldEnum TurboPageId()
 * @method static LeadFieldEnum TurboPageName ()
 * @method static LeadFieldEnum Id ()
 * @method static LeadFieldEnum Data ()
 */
class LeadFieldEnum extends Enum
{
    const SubmittedAt = 'SubmittedAt';
    const TurboPageId = 'TurboPageId';
    const TurboPageName = 'TurboPageName';
    const Id = 'Id';
    const Data = 'Data';
}