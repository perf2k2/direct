<?php

namespace direct\api\entities\agencyclients;

use direct\api\Entity;

class NotificationAdd extends Entity
{
    protected $Lang;
    protected $Email;
    protected $EmailSubscriptions;
    
    public function __construct(string $Lang, string $Email, array $EmailSubscriptions)
    {
        $this->Lang = $Lang;
        $this->Email = $Email;
        $this->EmailSubscriptions = $EmailSubscriptions;
    }
}