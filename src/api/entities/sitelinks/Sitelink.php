<?php

namespace perf2k2\direct\api\entities\sitelinks;

class Sitelink
{
    public $Title;
    public $Href;
    public $Description;

    public function __construct(string $Title, string $Href, string $Description)
    {
        $this->Title = $Title;
        $this->Href = $Href;
        $this->Description = $Description;
    }
}