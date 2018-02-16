<?php

namespace api\entities\vcards;

use api\entities\InstantMessenger;
use api\entities\MapPoint;
use api\entities\Phone;
use perf2k2\direct\api\Entity;

class VCardAddItem extends Entity
{
    protected $CampaignId;
    protected $Country;
    protected $City;
    protected $CompanyName;
    protected $WorkTime;
    protected $Phone;
    protected $Street;
    protected $House;
    protected $Building;
    protected $Apartment;
    protected $InstantMessenger;
    protected $ExtraMessage;
    protected $ContactEmail;
    protected $Ogrn;
    protected $MetroStationId;
    protected $PointOnMap;
    protected $ContactPerson;
    
    public function __construct(int $CampaignId, string $Country, string $City, string $CompanyName, string $WorkTime, Phone $Phone)
    {
        $this->CampaignId = $CampaignId;
        $this->Country = $Country;
        $this->City = $City;
        $this->CompanyName = $CompanyName;
        $this->WorkTime = $WorkTime;
        $this->Phone = $Phone;
    }
    
    public function setStreet(string $Street)
    {
        $this->Street = $Street;
        return $this;
    }
    
    public function setHouse(string $House)
    {
        $this->House = $House;
        return $this;
    }
    
    public function setBuilding(string $Building)
    {
        $this->Building = $Building;
        return $this;
    }
    
    public function setApartment(string $Apartment)
    {
        $this->Apartment = $Apartment;
        return $this;
    }
    
    public function setInstantMessenger(InstantMessenger $InstantMessenger)
    {
        $this->InstantMessenger = $InstantMessenger;
        return $this;
    }
    
    public function setExtraMessage(string $ExtraMessage)
    {
        $this->ExtraMessage = $ExtraMessage;
        return $this;
    }
    
    public function setContactEmail(string $ContactEmail)
    {
        $this->ContactEmail = $ContactEmail;
        return $this;
    }
    
    public function setOgrn(string $Ogrn)
    {
        $this->Ogrn = $Ogrn;
        return $this;
    }
    
    public function setMetroStationId(int $MetroStationId)
    {
        $this->MetroStationId = $MetroStationId;
        return $this;
    }
    
    public function setPointOnMap(MapPoint $PointOnMap)
    {
        $this->PointOnMap = $PointOnMap;
        return $this;
    }
    
    public function setContactPerson(string $ContactPerson)
    {
        $this->ContactPerson = $ContactPerson;
        return $this;
    }
}