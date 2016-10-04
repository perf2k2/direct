<?php

namespace perf2k2\direct\api\entities\sitelinks;

class SitelinksSetAddItem
{
    public $Sitelinks;

    public function setSiteLinks(array $Sitelinks)
    {
        $this->Sitelinks = $Sitelinks;
        return $this;
    }
}