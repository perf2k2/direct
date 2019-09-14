<?php
declare(strict_types=1);

namespace perf2k2\direct\transport;

use GuzzleHttp\Client;
use perf2k2\direct\credentials\CredentialInterface;
use perf2k2\direct\exceptions\ApiException;
use GuzzleHttp\Exception\ClientException;
use Psr\Http\Message\ResponseInterface;

class Connection
{
    protected $credential;
    protected $params;
    protected $httpClient;

    public function __construct(
        CredentialInterface $credential,
        ConnectionParams $params
    )
    {
        $this->credential = $credential;
        $this->params = $params;
        $this->httpClient = new Client(['base_uri' => $this->getUrl()]);
    }

    public function getCredential(): CredentialInterface
    {
        return $this->credential;
    }

    public function getParams(): ConnectionParams
    {
        return $this->params;
    }

    public function send(Request $request): Response
    {
        $httpResponse = $this->sendHttpRequest($request, $this->getHeaders($request), [
            'method' => $request->getMethod(),
            'params' => $request->getParams(),
        ]);

        if ($httpResponse->hasHeader('Units')) {
            return new Response(
                $request,
                (int) $httpResponse->getHeader('RequestId')[0],
                (string) $httpResponse->getBody()->getContents(),
                (string) $httpResponse->getHeader('Units')[0]
            );
        }
        
        return new Response(
            $request,
            (int) $httpResponse->getHeader('RequestId')[0],
            (string) $httpResponse->getBody()->getContents()
        );
    }

    public function sendReport(ReportRequest $request): ReportResponse
    {
        $httpResponse = $this->sendHttpRequest($request, array_merge($this->getHeaders($request), [
            'processingMode' => $request->getMode(),
            'returnMoneyInMicros' => var_export($request->isReturnMoneyInMicros(), true),
            'skipReportHeader' => var_export($request->isSkipReportHeader(), true),
            'skipColumnHeader' => var_export($request->isSkipColumnHeader(), true),
            'skipReportSummary' => var_export($request->isSkipReportSummary(), true),
        ]), [
            'params' => $request->getParams(),
        ]);

        if ($httpResponse->hasHeader('retryIn') && $httpResponse->hasHeader('reportsInQueue')) {
            $retryIn = (int) $httpResponse->getHeader('retryIn')[0];
            sleep($retryIn);
            return $this->sendReport($request);
        }

        return new ReportResponse(
            $request,
            $httpResponse->getStatusCode(),
            (int) $httpResponse->getHeader('RequestId')[0],
            (string) $httpResponse->getBody()->getContents()
        );
    }

    protected function getUrl(): string
    {
        return $this->getParams()->isSandbox() ?
            'https://api-sandbox.direct.yandex.com/json/v5/' :
            'https://api.direct.yandex.com/json/v5/';
    }

    protected function getHeaders(AbstractRequest $request): array
    {
        return [
            'Authorization' => "Bearer {$this->getCredential()->getAuthToken()}",
            'Accept-Language' => $this->getParams()->getAcceptLanguage(),
            'Client-Login' => $this->getCredential()->getClientLogin(),
            'Content-Type' => 'application/json; charset=utf-8',
        ];
    }

    protected function sendHttpRequest(AbstractRequest $request, array $headers, array $data): ResponseInterface
    {
        try {
            $httpResponse = $this->httpClient->post($request->getService(), [
                'headers' => $headers,
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