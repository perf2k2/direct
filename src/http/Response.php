<?php

namespace direct\http;

use direct\exceptions\ApiException;
use direct\exceptions\WrapperException;

class Response
{
    /**
     * @var \stdClass Decoded response data
     */
    protected $result;
    
    /**
     * @param string $result Http response body
     * @throws WrapperException|ApiException
     */
    public function __construct(string $result)
    {
        $decoded = json_decode($result);

        if ($decoded === null) {
            throw new WrapperException('Received json cannot be decoded');
        }

        if (isset($decoded->error)) {
            throw new ApiException(
                !empty($decoded->error->error_detail) ? $decoded->error->error_detail : $decoded->error->error_string,
                $decoded->error->error_code
            );
        }

        $this->result = $decoded->result;
    }
    
    /**
     * @param string|null $name Entity name for return (if not specified, returns all result data)
     * @return array|\stdClass Array of entities or entity data
     * @throws WrapperException
     */
    public function getResult(string $name = null)
    {
        if ($name === null) {
            return $this->result;
        }
        
        if (!property_exists($this->result, $name)) {
            throw new WrapperException("Entity '{$name}' not exists at response");
        }
        
        return $this->result->$name;
    }
}