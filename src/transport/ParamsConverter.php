<?php
declare(strict_types=1);

namespace perf2k2\direct\transport;

use MyCLabs\Enum\Enum;
use perf2k2\direct\api\ApiParametrizedObjectInterface;

class ParamsConverter
{
    protected $data;
    
    public function __construct(array $data)
    {
        $this->data = $data;
    }
    
    public function toArray(): array
    {
        $params = $this->data;
        
        unset($params['serviceName'], $params['apiName']);
        
        // Recursively format the data of all children
        foreach ($params as $name => &$value) {
            if ($value instanceof ApiParametrizedObjectInterface) {
                $value = (new self($value->getData()))->toArray();
            } elseif ($value instanceof \DateTimeImmutable) {
                $value = $value->format('Y-m-d');
            } elseif ($value instanceof Enum) {
                $value = (string) $value;
            } elseif (\is_array($value)) {
                foreach ($value as &$child) {
                    if ($child instanceof ApiParametrizedObjectInterface) {
                        $child = (new self($child->getData()))->toArray();
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