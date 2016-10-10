<?php

namespace perf2k2\direct;

use perf2k2\direct\api\entities\campaigns\CampaignsSelectionCriteria;
use perf2k2\direct\api\entities\LimitOffset;
use perf2k2\direct\api\enums\campaign\CampaignFieldEnum;
use perf2k2\direct\api\methods\CampaignsGet;
use perf2k2\direct\http\Connection;

class ConnectionTest extends \PHPUnit_Framework_TestCase
{
    public function testSend()
    {
        $connection = new Connection(__DIR__ . '/../../../', true);

        $params =  (new CampaignsGet('campaigns'))
            ->setSelectionCriteria(new CampaignsSelectionCriteria())
            ->setFieldNames([CampaignFieldEnum::Id])
            ->setPage(new LimitOffset(1, 0));

        $this->expectException('perf2k2\direct\exceptions\ApiException');

        $connection->request('unknown', 'unknown', $params->asArray());

        $this->expectException('perf2k2\direct\exceptions\ApiException');

        $response = $connection->request('Campaigns', 'get', $params->asArray());

        $this->assertInstanceOf('perf2k2\direct\http\Response', $response);
    }
}