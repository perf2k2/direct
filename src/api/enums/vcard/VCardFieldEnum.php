<?php

namespace direct\api\enums\vcard;

use direct\api\Enum;

/**
 * @method static VCardFieldEnum Id()
 * @method static VCardFieldEnum Country()
 * @method static VCardFieldEnum City()
 * @method static VCardFieldEnum Street()
 * @method static VCardFieldEnum House()
 * @method static VCardFieldEnum Building()
 * @method static VCardFieldEnum Apartment()
 * @method static VCardFieldEnum CompanyName()
 * @method static VCardFieldEnum ExtraMessage()
 * @method static VCardFieldEnum ContactPerson()
 * @method static VCardFieldEnum ContactEmail()
 * @method static VCardFieldEnum MetroStationId()
 * @method static VCardFieldEnum CampaignId()
 * @method static VCardFieldEnum Ogrn()
 * @method static VCardFieldEnum WorkTime()
 * @method static VCardFieldEnum InstantMessenger()
 * @method static VCardFieldEnum Phone()
 * @method static VCardFieldEnum PointOnMap()
 */
final class VCardFieldEnum extends Enum
{
    const Id = 'Id';
    const Country = 'Country';
    const City = 'City =';
    const Street = 'Street';
    const House = 'House';
    const Building = 'Building';
    const Apartment = 'Apartment';
    const CompanyName = 'CompanyName';
    const ExtraMessage = 'ExtraMessage';
    const ContactPerson = 'ContactPerson';
    const ContactEmail = 'ContactEmail';
    const MetroStationId = 'MetroStationId';
    const CampaignId = 'CampaignId';
    const Ogrn = 'Ogrn';
    const WorkTime = 'WorkTime';
    const InstantMessenger = 'InstantMessenger';
    const Phone = 'Phone';
    const PointOnMap = 'PointOnMap';
}