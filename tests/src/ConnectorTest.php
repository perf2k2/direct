<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\CampaignsSelectionCriteria;
use perf2k2\direct\api\entities\LimitOffset;
use perf2k2\direct\api\enums\CampaignFieldEnum;
use perf2k2\direct\api\params\CampaignsGetParams;
use perf2k2\direct\dictionaries\Method;
use perf2k2\direct\dictionaries\Service;

class ConnectorTest extends \PHPUnit_Framework_TestCase
{
    public function testSend()
    {
        $connection = new Connector(__DIR__ . '/../../', true);
        $params = (new CampaignsGetParams())
            ->setSelectionCriteria(new CampaignsSelectionCriteria())
            ->setFieldNames([CampaignFieldEnum::$Id])
            ->setPage(new LimitOffset(1, 0));

        $this->expectException('perf2k2\direct\exceptions\ApiException');

        $connection->request('unknown', 'unknown', $params);

        $this->expectException('perf2k2\direct\exceptions\ApiException');

        $response = $connection->request(Service::$Campaigns, Method::$get, $params);

        $this->assertInstanceOf('perf2k2\direct\http\Response', $response);
    }
}