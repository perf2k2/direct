<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;
use perf2k2\direct\api\entities\adimages\AdImageAddItem;

class AdImagesAdd extends AddMethod
{
    protected $AdImages;

    /**
     * @param AdImageAddItem[] $AdImages
     * @return AdImagesAdd
     */
    public function setAdImages(array $AdImages): AdImagesAdd
    {
        $this->AdImages = $AdImages;
        return $this;
    }
}