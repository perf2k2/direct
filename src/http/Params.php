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
        
        // Recursively format the data of all children
        foreach ($params as $name => &$value) {
            if ($value instanceof ApiParametrizedObjectInterface) {
                $value = (new self($value->getData()))->format();
            } elseif (\is_array($value)) {
                foreach ($value as &$child) {
                    if ($child instanceof ApiParametrizedObjectInterface) {
                        $child = (new self($child->getData()))->format();
                    }
                }
                unset($child);
            } elseif ($value === null) {
                unset($params[$name]);
            }
        }
        
        return $params;
    }
}