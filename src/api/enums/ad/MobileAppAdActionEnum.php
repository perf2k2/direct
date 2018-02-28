<?php

namespace api\enums\ad;

use api\Enum;

/**
 * @method static MobileAppAdActionEnum DOWNLOAD()
 * @method static MobileAppAdActionEnum GET()
 * @method static MobileAppAdActionEnum INSTALL()
 * @method static MobileAppAdActionEnum MORE()
 * @method static MobileAppAdActionEnum OPEN()
 * @method static MobileAppAdActionEnum UPDATE()
 * @method static MobileAppAdActionEnum PLAY()
 * @method static MobileAppAdActionEnum BUY_AUTODETECT()
 */
class MobileAppAdActionEnum extends Enum
{
    const DOWNLOAD = 'DOWNLOAD';
    const GET = 'GET';
    const INSTALL = 'INSTALL';
    const MORE = 'MORE';
    const OPEN = 'OPEN';
    const UPDATE = 'UPDATE';
    const PLAY = 'PLAY';
    const BUY_AUTODETECT = 'BUY_AUTODETECT';
}
