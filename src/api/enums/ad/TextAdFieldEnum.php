<?php

namespace perf2k2\direct\api\enums\ad;

use api\Enum;

/**
 * @method static TextAdFieldEnum Title()
 * @method static TextAdFieldEnum Text()
 * @method static TextAdFieldEnum Href()
 * @method static TextAdFieldEnum Mobile()
 * @method static TextAdFieldEnum DisplayDomain()
 * @method static TextAdFieldEnum DisplayUrlPath()
 * @method static TextAdFieldEnum VCardId()
 * @method static TextAdFieldEnum SitelinkSetId()
 * @method static TextAdFieldEnum AdImageHash()
 * @method static TextAdFieldEnum DisplayUrlPathModeration()
 * @method static TextAdFieldEnum VCardModeration()
 * @method static TextAdFieldEnum SitelinksModeration()
 * @method static TextAdFieldEnum AdImageModeration()
 * @method static TextAdFieldEnum AdExtensions()
 */
final class TextAdFieldEnum extends Enum
{
    const Title = 'Title';
    const Text = 'Text';
    const Href = 'Href';
    const Mobile = 'Mobile';
    const DisplayDomain = 'DisplayDomain';
    const DisplayUrlPath = 'DisplayUrlPath';
    const VCardId = 'VCardId';
    const SitelinkSetId = 'SitelinkSetId';
    const AdImageHash = 'AdImageHash';
    const DisplayUrlPathModeration = 'DisplayUrlPathModeration';
    const VCardModeration = 'VCardModeration';
    const SitelinksModeration = 'SitelinksModeration';
    const AdImageModeration = 'AdImageModeration';
    const AdExtensions = 'AdExtensions';
}