<?php

namespace acceptance;

use direct\api\entities\campaigns\CampaignsSelectionCriteria;
use direct\api\entities\LimitOffset;
use direct\api\enums\campaign\CampaignFieldEnum;
use direct\Campaigns;
use direct\credentials\ConfigFileCredential;
use direct\transport\Response;
use direct\transport\Client;
use direct\transport\Connection;

class CampaignsTest extends \PHPUnit_Framework_TestCase
{
    public function testGet()
    {
        $method = Campaigns::get()
            ->setSelectionCriteria(new CampaignsSelectionCriteria())
            ->setFieldNames([CampaignFieldEnum::Id(), CampaignFieldEnum::Name()])
            ->setPage(new LimitOffset(5));
        
        $client = new Client(new ConfigFileCredential());
        $connection = new Connection();
        $response = $connection->send($client->createRequest($method));
        
        $campaignId = $response->getResult('Campaigns')[0]->Id;
        $this->assertInstanceOf(Response::class, $response);
        $this->assertInternalType('numeric', $campaignId);
        
        return $campaignId;
    }
}