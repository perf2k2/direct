<?php
declare(strict_types=1);

namespace api\enums\reports;

use direct\api\Enum;

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