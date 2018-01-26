<?php

namespace api\entities;

use perf2k2\direct\api\JsonSerializable;

class InstantMessenger extends JsonSerializable
{
    protected $MessengerClient;
    protected $MessengerLogin;
    
    public function __construct(string $MessengerClient, string $MessengerLogin)
    {
        $this->MessengerClient = $MessengerClient;
        $this->MessengerLogin = $MessengerLogin;
    }
}