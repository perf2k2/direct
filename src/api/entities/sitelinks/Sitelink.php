<?php

namespace direct\api\entities\sitelinks;

use direct\api\Entity;

class Sitelink extends Entity
{
    protected $Title;
    protected $Href;
    protected $Description;

    public function __construct(string $Title, string $Href, string $Description)
    {
        $this->Title = $Title;
        $this->Href = $Href;
        $this->Description = $Description;
    }
}