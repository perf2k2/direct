<?php

namespace perf2k2\direct\api\methods;

use api\entities\keywordsresearch\DeduplicateRequestItem;
use perf2k2\direct\api\AbstractMethod;
use perf2k2\direct\api\enums\keywordsresearch\DeduplicateOperationEnum;
use perf2k2\direct\api\NamedMethodInterface;

class KeywordsResearchDeduplicate extends AbstractMethod implements NamedMethodInterface
{
    protected $Keywords;
    protected $Operation;
    
    public function getApiName(): string
    {
        return 'deduplicate';
    }

    /**
     * @param DeduplicateRequestItem[] $Keywords
     * @return $this
     */
    public function setKeywords(array $Keywords)
    {
        $this->Keywords = $Keywords;
        return $this;
    }

    /**
     * @param DeduplicateOperationEnum[] $Operation
     * @return $this
     */
    public function setOperation(array $Operation)
    {
        $this->Operation = $Operation;
        return $this;
    }
}