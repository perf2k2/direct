<?php
declare(strict_types=1);

namespace perf2k2\direct\transport;

use perf2k2\direct\exceptions\ApiException;
use perf2k2\direct\exceptions\WrapperException;

class Response extends AbstractResponse
{
    private $units;
    
    public function __construct(int $requestId, string $body, string $units = null)
    {
        $this->requestId = $requestId;
        $this->units = $units;
    
        $decoded = json_decode($body);
    
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

    public function getUnits(): string
    {
        return $this->units;
    }
}