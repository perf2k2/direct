# direct
[![Build Status](https://travis-ci.org/perf2k2/direct.svg?branch=master)](https://travis-ci.org/perf2k2/direct)

**Нестабильная версия, не используйте в продакшене.**    

Обертка для работы с API Яндекс.Директа пятой версии.

## Особенности

* Все структуры из документации представлены в виде объектов, в том числе enum
* Несколько провайдеров аутентификации, в том числе файл переменных окружения
* Встроенные хелперы для удобной работы с ответами (поддерживаются ответы справочника и статистики)
* Покрытие тестами основных компонентов 

## Требования

PHP >= 7.0

## Зависимости

* myclabs/php-enum (для enum type hint)
* vlucas/phpdotenv (для чтения переменных окружения из файла)
* guzzlehttp/guzzle (для работы с api по http)

## Установка

Наиболее быстрый и удобный способ установки - используя Composer:
```bash
$ composer require perf2k2/direct
```

## Реализованные методы
Даже если метод реализован, есть вероятность отсутствия поддержки последних его возможностней

Сервисы | Методы | Все 
--- | --- | ---
Campaigns|add, archive, delete, get, resume, suspend, unarchive, update|&#10004;
AdGroups|add, delete, get, update|&#10004;
Ads|add, archive, delete, get, moderate, resume, suspend, unarchive, update|&#10004;
Creatives|get|&#10004;
Keywords|add, delete, get, resume, suspend, update|&#10004;
Bids|get, set, setAuto|&#10004;
KeywordBids|get, set, setAuto|&#10004;
BidModifiers|add, delete, get, set, toggle|&#10004;
AudienceTargets|add, delete, get, resume, setBids, suspend|&#10004;
RetargetingLists|add, delete, get, update|&#10004;
VCards|add, get, delete|&#10004;
Sitelinks|add, get, delete|&#10004;
AdImages|add, get, delete|&#10004;
AdExtensions|add, get, delete|&#10004;
DynamicTextAdTargets|add, get, delete, resume, suspend, setBids|&#10004;
Changes|check, checkCampaigns, checkDictionaries|&#10004;
TurboPages|get|&#10004;
Leads|get|&#10004;
NegativeKeywordSharedSets||
Dictionaries|get|&#10004;
Clients|get, update|&#10004;
AgencyClients|get, update, add|&#10004;
KeywordsResearch|hasSearchVolume|&#10004;

## Пример использования

Получение данных из справочника
```php
$reference = new ReferenceClient(
    new Connection(new Credential('token', 'client')),
    new JsonReader()
);

$criteria = (new AdsSelectionCriteria())
    ->setCampaignIds([1000])
    ->setTypes([AdTypeEnum::TEXT_AD()]);

$method = $reference
    ->getAdsService()
    ->getGetMethod()
    ->setSelectionCriteria($criteria)
    ->setFieldNames([AdFieldEnum::Id, AdFieldEnum::State])
    ->setTextAdFieldNames([
        TextAdFieldEnum::VCardId,
        TextAdFieldEnum::Href,
        TextAdFieldEnum::SitelinkSetId,
    ]);

$data = $reference->process($method)->getResult('Ads');
```

Получение данных статистики (отчета)

```php 
$stats = new ReportClient(
    new Connection(new Credential('token', 'client')),
    new TSVReader()
);

$method = $stats
    ->getReportsService()
    ->getBuildMethod()
    ->setSelectionCriteria(
        (new SelectionCriteria())
            ->setDateFrom(new \DateTimeImmutable('yesterday'))
            ->setDateTo(new \DateTimeImmutable('today'))
    )
    ->setFieldNames([FieldEnum::CampaignId(), FieldEnum::CampaignName(), FieldEnum::CampaignType()])
    ->setPage(new Page(10))
    ->setOrderBy([new OrderBy(FieldEnum::CampaignId(), OrderBySortOrderEnum::DESCENDING())])
    ->setReportName('Campaigns stats')
    ->setReportType(ReportTypeEnum::CAMPAIGN_PERFORMANCE_REPORT())
    ->setDateRangeType(DateRangeTypeEnum::CUSTOM_DATE())
    ->setFormat(FormatEnum::TSV())
    ->setIncludeVAT(YesNoEnum::NO())
    ->setIncludeDiscount(YesNoEnum::NO());

$data = $stats->process($method)->asArray();
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