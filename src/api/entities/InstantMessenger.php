<?php

namespace direct\api\entities;

use direct\api\Entity;

class InstantMessenger extends Entity
{
    protected $MessengerClient;
    protected $MessengerLogin;
    
    public function __construct(string $MessengerClient, string $MessengerLogin)
    {
        $this->MessengerClient = $MessengerClient;
        $this->MessengerLogin = $MessengerLogin;
    }
}