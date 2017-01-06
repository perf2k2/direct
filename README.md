# direct

Обертка для работы с API Яндекс.Директа пятой версии.
Нестабильная версия, не используйте в продакшене.
Do not use in production, work in progress.

##Реализованные методы

Сервисы | Методы 
--- | ---
Campaigns|add, archive, delete, get, resume, suspend, unarchive, update
AdGroups|add, delete, get, update
Ads|archive, get, suspend, unarchive, update
Keywords|get
Bids|get, set
BidModifiers|
AudienceTargets|
RetargetingLists|
VCards|get
Sitelinks|add, get, delete
AdImages|
AdExtensions|
DynamicTextAdTargets|
Changes|
Dictionaries|
Clients|

##Пример использования

Получим все кампании с полями Id, Name и State
```php
$response = Campaigns::get()
    ->setSelectionCriteria(new CampaignsSelectionCriteria())
    ->setFieldNames([
        CampaignFieldEnum::Id,
        CampaignFieldEnum::Name,
        CampaignFieldEnum::State
    ])
    ->createAndSendRequest();

$campaigns = $response->getResult('Campaigns');
```

Получим все объявления кампании CampaignsTest::DEFAULT_CAMPAIGN с полями Id и State
```php
$response = Ads::get()
    ->setSelectionCriteria(
        (new AdsSelectionCriteria())
            ->setCampaignIds([CampaignsTest::DEFAULT_CAMPAIGN])
    )
    ->setFieldNames([
        AdFieldEnum::Id,
        AdFieldEnum::State
    ])
    ->setTextAdFieldNames([
        TextAdFieldEnum::VCardId,
        TextAdFieldEnum::Href,
        TextAdFieldEnum::SitelinkSetId,
    ])
    ->createAndSendRequest();
        
$ads = $response->getResult('Ads');
```

##Лицензия

MIT License (полный текст в файле LICENSE.md)