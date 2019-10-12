<?php
declare(strict_types=1);

namespace perf2k2\direct\api\entities\negativekeywordsharedsets;

use perf2k2\direct\api\Entity;

class NegativeKeywordSharedSetAddItem extends Entity
{
    private $Name;
    private $NegativeKeywords;

    /**
     * @param string $Name
     * @param string[] $NegativeKeywords
     */
    public function __construct(string $Name, array $NegativeKeywords)
    {
        $this->Name = $Name;
        $this->NegativeKeywords = $NegativeKeywords;
    }
}