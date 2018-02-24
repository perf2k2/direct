<?php

namespace api\enums\clients;

use api\Enum;

/**
 * @method static ClientFieldEnum AccountQuality()
 * @method static ClientFieldEnum Archived()
 * @method static ClientFieldEnum ClientId()
 * @method static ClientFieldEnum ClientInfo()
 * @method static ClientFieldEnum CountryId()
 * @method static ClientFieldEnum CreatedAt()
 * @method static ClientFieldEnum Currency()
 * @method static ClientFieldEnum Grants()
 * @method static ClientFieldEnum Login()
 * @method static ClientFieldEnum Notification()
 * @method static ClientFieldEnum OverdraftSumAvailable()
 * @method static ClientFieldEnum Phone()
 * @method static ClientFieldEnum Representatives()
 * @method static ClientFieldEnum Restrictions()
 * @method static ClientFieldEnum Settings()
 * @method static ClientFieldEnum Type()
 * @method static ClientFieldEnum VatRate()
 */
class ClientFieldEnum extends Enum
{
    const AccountQuality = 'AccountQuality';
    const Archived = 'Archived';
    const ClientId = 'ClientId';
    const ClientInfo = 'ClientInfo';
    const CountryId = 'CountryId';
    const CreatedAt = 'CreatedAt';
    const Currency = 'Currency';
    const Grants = 'Grants';
    const Login = 'Login';
    const Notification = 'Notification';
    const OverdraftSumAvailable = 'OverdraftSumAvailable';
    const Phone = 'Phone';
    const Representatives = 'Representatives';
    const Restrictions = 'Restrictions';
    const Settings = 'Settings';
    const Type = 'Type';
    const VatRate = 'VatRate';
}