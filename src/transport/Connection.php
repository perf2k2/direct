<?php
declare(strict_types=1);

namespace direct\transport;

use direct\exceptions\ApiException;
use GuzzleHttp\Exception\ClientException;
use Psr\Http\Message\ResponseInterface;
use transport\ReportResponse;

class Connection
{
    protected $sandbox;

    public function __construct(bool $sandbox = false)
    {
        $this->sandbox = $sandbox;
    }

    public function isSandbox(): bool
    {
        return $this->sandbox;
    }

    public function send(Request $request): Response
    {
        $httpResponse = $this->sendHttpRequest($request, [
            'method' => $request->getMethod(),
            'params' => $request->getParams(),
        ]);

        if ($httpResponse->hasHeader('Units')) {
            return new Response(
                (int) $httpResponse->getHeader('RequestId')[0],
                (string) $httpResponse->getBody()->getContents(),
                (string) $httpResponse->getHeader('Units')[0]
            );
        }
        
        return new Response(
            (int) $httpResponse->getHeader('RequestId')[0],
            (string) $httpResponse->getBody()->getContents()
        );
    }

    public function sendReport(ReportRequest $request): ReportResponse
    {
        $httpResponse = $this->sendHttpRequest($request, [
            'params' => $request->getParams(),
        ]);

        if ($httpResponse->hasHeader('retryIn') && $httpResponse->hasHeader('reportsInQueue')) {
            return new ReportResponse(
                $httpResponse->getStatusCode(),
                (int) $httpResponse->getHeader('RequestId')[0],
                (string) $httpResponse->getBody()->getContents(),
                (int) $httpResponse->getHeader('retryIn')[0],
                (int) $httpResponse->getHeader('reportsInQueue')[0]
            );
        }

        return new ReportResponse(
            $httpResponse->getStatusCode(),
            (int) $httpResponse->getHeader('RequestId')[0],
            (string) $httpResponse->getBody()->getContents()
        );
    }

    protected function getUrl(): string
    {
        return $this->sandbox ?
            'https://api-sandbox.direct.yandex.com/json/v5/' :
            'https://api.direct.yandex.com/json/v5/';
    }

    protected function getHeaders(AbstractRequest $request): array
    {
        return [
            'Authorization' => "Bearer {$request->getToken()}",
            'Accept-Language' => $request->getLanguage(),
            'Client-Login' => $request->getLogin(),
            'Content-Type' => 'application/json; charset=utf-8',
        ];
    }

    protected function sendHttpRequest(AbstractRequest $request, array $data): ResponseInterface
    {
        try {
            $httpClient = new \GuzzleHttp\Client(['base_uri' => $this->getUrl()]);
            $httpResponse = $httpClient->post($request->getService(), [
                'headers' => $this->getHeaders($request),
                'json' => $data,
            ]);

            return $httpResponse;
        } catch (ClientException $e) {
            $body = $e->getResponse()->getBody()->getContents();
            $decoded = json_decode($body);

            throw new ApiException(
                !empty($decoded->error->error_detail) ?
                    $decoded->error->error_detail :
                    $decoded->error->error_string,
                $decoded->error->error_code
            );
        }
    }
}