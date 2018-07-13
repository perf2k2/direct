<?php
declare(strict_types=1);

namespace perf2k2\direct\api\enums\reports;

use perf2k2\direct\api\Enum;

/**
 * @method static AttributionModelEnum FC()
 * @method static AttributionModelEnum LC()
 * @method static AttributionModelEnum NONE ()
 */
class AttributionModelEnum extends Enum
{
    const FC = 'FC';
    const LC = 'LC';
    const LSC  = 'LSC';
}