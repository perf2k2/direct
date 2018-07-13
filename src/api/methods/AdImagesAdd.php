<?php

namespace perf2k2\direct\api\methods;

use perf2k2\direct\api\AddMethod;

class AdImagesAdd extends AddMethod
{
    protected $AdImages;

    public function setAdImages(array $AdImages)
    {
        $this->AdImages = $AdImages;
        return $this;
    }
}