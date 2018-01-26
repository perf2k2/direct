<?php

namespace api\entities;

use perf2k2\direct\api\JsonSerializable;

class Phone extends JsonSerializable
{
    protected $CountryCode;
    protected $CityCode;
    protected $PhoneNumber;
    protected $Extension;
    
    public function __construct(string $CountryCode, string $CityCode, string $PhoneNumber)
    {
        $this->CountryCode = $CountryCode;
        $this->CityCode = $CityCode;
        $this->PhoneNumber = $PhoneNumber;
    }
    
    public function setExtension(string $Extension)
    {
        $this->Extension = $Extension;
    }
}