<?php

namespace perf2k2\direct\api\enums\creatives;

use perf2k2\direct\api\Enum;

/**
 * @method static CreativeTypeEnum IMAGE_CREATIVE()
 * @method static CreativeTypeEnum HTML5_CREATIVE()
 * @method static CreativeTypeEnum VIDEO_EXTENSION_CREATIVE()
 * @method static CreativeTypeEnum CPC_VIDEO_CREATIVE()
 * @method static CreativeTypeEnum CPM_VIDEO_CREATIVE()
 */
class CreativeTypeEnum extends Enum
{
    const IMAGE_CREATIVE = 'IMAGE_CREATIVE';
    const HTML5_CREATIVE = 'HTML5_CREATIVE';
    const VIDEO_EXTENSION_CREATIVE = 'VIDEO_EXTENSION_CREATIVE';
    const CPC_VIDEO_CREATIVE = 'CPC_VIDEO_CREATIVE';
    const CPM_VIDEO_CREATIVE = 'CPM_VIDEO_CREATIVE';
}
