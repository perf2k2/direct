<?php

namespace perf2k2\direct\api\enums\adgroups;

use perf2k2\direct\api\Enum;

/**
 * @method static AdGroupStatusSelectionEnum DRAFT()
 * @method static AdGroupStatusSelectionEnum MODERATION()
 * @method static AdGroupStatusSelectionEnum PREACCEPTED()
 * @method static AdGroupStatusSelectionEnum ACCEPTED()
 * @method static AdGroupStatusSelectionEnum REJECTED()
 */
final class AdGroupStatusSelectionEnum extends Enum
{
    const DRAFT = 'DRAFT';
    const MODERATION = 'MODERATION';
    const PREACCEPTED = 'PREACCEPTED';
    const ACCEPTED = 'ACCEPTED';
    const REJECTED = 'REJECTED';
}