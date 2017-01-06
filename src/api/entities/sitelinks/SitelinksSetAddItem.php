<?php

namespace perf2k2\direct\api\entities\sitelinks;

use perf2k2\direct\api\JsonSerializable;

class SitelinksSetAddItem extends JsonSerializable
{
    protected $Sitelinks;

    public function setSiteLinks(array $Sitelinks)
    {
        $this->Sitelinks = $Sitelinks;
        return $this;
    }
}