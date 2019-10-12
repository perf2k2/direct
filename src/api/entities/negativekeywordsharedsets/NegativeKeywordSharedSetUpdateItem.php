<?php
declare(strict_types=1);

namespace perf2k2\direct\api\entities\negativekeywordsharedsets;

use perf2k2\direct\api\Entity;

class NegativeKeywordSharedSetUpdateItem extends Entity
{
    private $Id;
    private $Name;
    private $NegativeKeywords;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }

    public function setName(string $Name): NegativeKeywordSharedSetUpdateItem
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @param string[] $NegativeKeywords
     * @return NegativeKeywordSharedSetUpdateItem
     */
    public function setNegativeKeywords(array $NegativeKeywords): NegativeKeywordSharedSetUpdateItem
    {
        $this->NegativeKeywords = $NegativeKeywords;
        return $this;
    }
}