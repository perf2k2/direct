<?php

namespace perf2k2\direct\api;

use perf2k2\direct\exceptions\WrapperException;
use perf2k2\direct\http\Connection;

abstract class Method
{
    protected $serviceName;
    protected $apiName;

    public function __construct(string $serviceName)
    {
        $this->serviceName = $serviceName;
    }

    public function getApiName(): string
    {
        return $this->apiName;
    }

    public function sendRequest(Connection $connection = null)
    {
        $connection = $this->getConnection($connection);
        return $connection->request($this->serviceName, self::getApiName(), $this->asArray());
    }

    public function asArray()
    {
        $params = get_object_vars($this);

        unset($params['serviceName']);
        unset($params['apiName']);

        return $params;
    }

    protected static function getConnection($connection)
    {
        if ($connection === null) {
            return new Connection();
        } else {
            if ($connection instanceof Connection) {
                return $connection;
            } else {
                throw new WrapperException('Use perf2k2\direct\http\Connection for api access');
            }
        }
    }
}