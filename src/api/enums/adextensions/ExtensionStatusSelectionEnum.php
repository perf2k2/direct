<?php

namespace direct\api\enums\adextensions;

use direct\api\Enum;

/**
 * @method static ExtensionStatusSelectionEnum ACCEPTED()
 * @method static ExtensionStatusSelectionEnum DRAFT()
 * @method static ExtensionStatusSelectionEnum MODERATION()
 * @method static ExtensionStatusSelectionEnum REJECTED()
 */
class ExtensionStatusSelectionEnum extends Enum
{
    const ACCEPTED = 'ACCEPTED';
    const DRAFT = 'DRAFT';
    const MODERATION = 'MODERATION';
    const REJECTED = 'REJECTED';
}