<?php

namespace direct\api\enums\ad;

use direct\api\Enum;

/**
 * @method static AdStatusSelectionEnum DRAFT()
 * @method static AdStatusSelectionEnum MODERATION()
 * @method static AdStatusSelectionEnum PREACCEPTED()
 * @method static AdStatusSelectionEnum ACCEPTED()
 * @method static AdStatusSelectionEnum REJECTED()
 */
final class AdStatusSelectionEnum extends Enum
{
    const DRAFT = 'DRAFT';
    const MODERATION = 'MODERATION';
    const PREACCEPTED = 'PREACCEPTED';
    const ACCEPTED = 'ACCEPTED';
    const REJECTED = 'REJECTED';
}