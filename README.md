# direct
[![Build Status](https://travis-ci.org/perf2k2/direct.svg?branch=master)](https://travis-ci.org/perf2k2/direct)

Обертка для работы с API Яндекс.Директа пятой версии. Нестабильная версия, не используйте в продакшене.

## Требования

PHP 7.x и новее

## Установка

Наиболее быстрый и удобный способ установки - используя Composer:
```bash
$ composer require perf2k2/direct:@dev
```

## Реализованные методы

Сервисы | Методы | Все 
--- | --- | ---
Campaigns|add, archive, delete, get, resume, suspend, unarchive, update|&#10004;
AdGroups|add, delete, get, update|&#10004;
Ads|add, archive, delete, get, moderate, resume, suspend, unarchive, update|&#10004;
Keywords|add, delete, get, resume, suspend, update|&#10004;
Bids|get, set, setAuto|&#10004;
BidModifiers|add, delete, get, set, toggle|&#10004;
AudienceTargets|add, delete, get, resume, setBids, suspend|&#10004;
RetargetingLists|add, delete, get, update|&#10004;
VCards|add, get, delete|&#10004;
Sitelinks|add, get, delete|&#10004;
AdImages|add, get, delete|&#10004;
AdExtensions|add, get, delete|&#10004;
DynamicTextAdTargets|add, get, delete, resume, suspend, setBids|&#10004;
Changes|check, checkCampaigns, checkDictionaries|&#10004;
Dictionaries|get|&#10004;
Clients|get, update|&#10004;
AgencyClients|get, update, add|&#10004;
KeywordsResearch|hasSearchVolume|&#10004;

## Пример использования

Получим все объявления кампании CampaignsTest::DEFAULT_CAMPAIGN с полями Id и State
```php
$service = Ads::get()
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

// Доступ к API при помощи реквизитов из конфигурационного файла    
$response = $service->createAndSendRequest(new ConfigFileCredential());

// Получим данные кампаний из ответа
$campaigns = $response->getResult('Campaigns');
```

Так же можно указать реквизиты в теле скрипта:

```php 
$response = $service->createAndSendRequest(new Credential('token', 'login'));
```

## Лицензия

**GNU GPL v3**

Copyright (C) 2017 Romannikov Nikita

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.