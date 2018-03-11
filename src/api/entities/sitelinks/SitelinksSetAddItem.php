<?php

namespace direct\api\entities\sitelinks;

use direct\api\Entity;

class SitelinksSetAddItem extends Entity
{
    protected $Sitelinks;

    public function setSiteLinks(array $Sitelinks)
    {
        $this->Sitelinks = $Sitelinks;
        return $this;
    }
}