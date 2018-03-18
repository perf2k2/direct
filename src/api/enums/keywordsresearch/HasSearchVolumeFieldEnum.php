<?php

namespace direct\api\enums\keywordsresearch;

use direct\api\Enum;

/**
 * @method static HasSearchVolumeFieldEnum Keyword()
 * @method static HasSearchVolumeFieldEnum RegionIds()
 * @method static HasSearchVolumeFieldEnum AllDevices()
 * @method static HasSearchVolumeFieldEnum MobilePhones()
 * @method static HasSearchVolumeFieldEnum Tablets()
 * @method static HasSearchVolumeFieldEnum Desktops()
 */
final class HasSearchVolumeFieldEnum extends Enum
{
    const Keyword = 'Keyword';
    const RegionIds = 'RegionIds';
    const AllDevices = 'AllDevices';
    const MobilePhones = 'MobilePhones';
    const Tablets = 'Tablets';
    const Desktops = 'Desktops';
}