<?php

namespace perf2k2\direct\api\entities\sitelinks;

use perf2k2\direct\api\Entity;

class SitelinksSetAddItem extends Entity
{
    protected $Sitelinks;

    public function setSiteLinks(array $Sitelinks)
    {
        $this->Sitelinks = $Sitelinks;
        return $this;
    }
}