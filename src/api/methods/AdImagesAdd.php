<?php

namespace direct\api\methods;

use direct\api\AddMethod;

class AdImagesAdd extends AddMethod
{
    protected $AdImages;

    public function setAdImages(array $AdImages)
    {
        $this->AdImages = $AdImages;
        return $this;
    }
}