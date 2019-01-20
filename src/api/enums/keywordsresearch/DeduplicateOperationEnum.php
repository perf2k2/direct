<?php

namespace perf2k2\direct\api\enums\keywordsresearch;

use perf2k2\direct\api\Enum;

/**
 * @method static DeduplicateOperationEnum MERGE_DUPLICATES()
 * @method static DeduplicateOperationEnum ELIMINATE_OVERLAPPING()
 */
final class DeduplicateOperationEnum extends Enum
{
    const MERGE_DUPLICATES = 'MERGE_DUPLICATES';
    const ELIMINATE_OVERLAPPING = 'ELIMINATE_OVERLAPPING';
}