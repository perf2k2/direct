<?php
declare(strict_types=1);

namespace direct\http;

use direct\api\ApiParametrizedObjectInterface;

class Params
{
    protected $data;
    
    public function __construct(array $data)
    {
        $this->data = $data;
    }
    
    public function format(): array
    {
        $params = $this->data;
        
        unset($params['serviceName'], $params['apiName']);
        
        foreach ($params as $name => &$value) {
            if ($value instanceof ApiParametrizedObjectInterface) {
                $value = $value->getData();
            }
        }
        
        return $params;
    }
}