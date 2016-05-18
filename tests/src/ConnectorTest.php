<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\CampaignsSelectionCriteria;
use perf2k2\direct\api\entities\LimitOffset;
use perf2k2\direct\api\enums\CampaignFieldEnum;
use perf2k2\direct\api\params\CampaignsGetParams;
use perf2k2\direct\dictionaries\Methods;
use perf2k2\direct\dictionaries\Services;
use perf2k2\direct\http\Request;

class ConnectorTest extends \PHPUnit_Framework_TestCase
{
    public function testSend()
    {
        $connection = new Connector(__DIR__ . '/../../', true);
        $params = (new CampaignsGetParams())
            ->setSelectionCriteria(new CampaignsSelectionCriteria())
            ->setFieldNames([CampaignFieldEnum::$Id])
            ->setPage(new LimitOffset(0, 1));

        $this->expectException('perf2k2\direct\exceptions\ApiException');

        $connection->send(
            new Request($connection, 'unknown', 'unknown', $params)
        );

        $this->expectException('perf2k2\direct\exceptions\ApiException');

        $connection->send(
            new Request($connection, Services::$Campaigns, Methods::$get, new CampaignsGetParams())
        );

        $response = $connection->send(
            new Request($connection, Services::$Campaigns, Methods::$get, $params)
        );

        $this->assertInstanceOf('perf2k2\direct\http\Response', $response);
    }
}