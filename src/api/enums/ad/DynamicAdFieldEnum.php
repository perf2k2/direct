<?php

namespace perf2k2\direct\api\enums\ad;

use MyCLabs\Enum\Enum;

/**
 * @method static DynamicAdFieldEnum Text()
 * @method static DynamicAdFieldEnum VCardId()
 * @method static DynamicAdFieldEnum SitelinkSetId()
 * @method static DynamicAdFieldEnum VCardModeration()
 * @method static DynamicAdFieldEnum SitelinksModeration()
 * @method static DynamicAdFieldEnum AdExtensions()
 */
final class DynamicAdFieldEnum extends Enum
{
    const Text = 'Text';
    const VCardId = 'VCardId';
    const SitelinkSetId = 'SitelinkSetId';
    const VCardModeration = 'VCardModeration';
    const SitelinksModeration = 'SitelinksModeration';
    const AdExtensions = 'AdExtensions';
}