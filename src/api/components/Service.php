<?php

namespace perf2k2\direct\api\components;

use perf2k2\direct\exceptions\WrapperException;
use perf2k2\direct\http\Connection;

class Service
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = self::getConnection($connection);
    }

    public function runMethod($method, $params)
    {
        $reflection = new \ReflectionClass($this);
        $serviceName = strtolower($reflection->getShortName());
        return $this->connection->request($serviceName, $method, $params);
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