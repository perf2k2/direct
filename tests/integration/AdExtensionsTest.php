<?php

namespace perf2k2\direct\tests\integration;

use perf2k2\direct\api\entities\adextensions\AdExtensionAddItem;
use perf2k2\direct\api\entities\adextensions\AdExtensionsSelectionCriteria;
use perf2k2\direct\api\entities\adextensions\Callout;
use perf2k2\direct\api\enums\adextensions\AdExtensionStateSelectionEnum;
use perf2k2\direct\api\enums\adextensions\AdExtensionTypeEnum;
use perf2k2\direct\api\enums\adextensions\ExtensionStatusSelectionEnum;
use perf2k2\direct\credentials\ConfigFileCredential;
use perf2k2\direct\api\entities\IdsCriteria;
use perf2k2\direct\api\entities\LimitOffset;
use perf2k2\direct\readers\JsonReader;
use perf2k2\direct\ReferenceClient;
use perf2k2\direct\tests\stubs\FakeConnection;
use perf2k2\direct\transport\Response;
use PHPUnit\Framework\TestCase;

class AdExtensionsTest extends TestCase
{
    private static $client;

    public function __construct()
    {
        parent::__construct();
        self::$client = new ReferenceClient(
            new FakeConnection(new ConfigFileCredential(__DIR__ . '/../../')),
            new JsonReader()
        );
    }

    public function testAdd()
    {
        $method = self::$client->AdExtensions()->add()
            ->setAdExtensions([
                new AdExtensionAddItem(new Callout('text'))
            ]);
        
        $this->assertSame(1, self::$client->process($method)->getResult('AddResults')[0]->Id);
    }
    
    public function testGet()
    {
        $method = self::$client->AdExtensions()->get()
            ->setSelectionCriteria(
                (new AdExtensionsSelectionCriteria())
                    ->setIds([1])
                    ->setStates([AdExtensionStateSelectionEnum::DELETED()])
                    ->setStatuses([ExtensionStatusSelectionEnum::ACCEPTED()])
                    ->setTypes([AdExtensionTypeEnum::CALLOUT()])
                    ->setModifiedSince(date(\DateTime::ATOM))
            )
            ->setFieldNames(['Id', 'Id'])
            ->setCalloutFieldNames(['CalloutText'])
            ->setPage(new LimitOffset(LimitOffset::MAX_SIZE));

        $this->assertInstanceOf(Response::class, self::$client->send($method));
    }
    
    public function testDelete()
    {
        $method = self::$client->AdExtensions()->delete()
            ->setSelectionCriteria((new IdsCriteria())
                ->setIds([])
            );

        $this->assertInstanceOf(Response::class, self::$client->send($method));
    }
}
