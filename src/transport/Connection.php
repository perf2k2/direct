<?php
declare(strict_types=1);

namespace direct\transport;

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
        $uri = $this->sandbox ?
            'https://api-sandbox.direct.yandex.com/json/v5/' :
            'https://api.direct.yandex.com/json/v5/';

        $httpClient = new \GuzzleHttp\Client(['base_uri' => $uri]);
        $httpResponse = $httpClient->post($request->getService(), [
            'headers' => [
                'Authorization' => "Bearer {$request->getToken()}",
                'Accept-Language' => $request->getLanguage(),
                'Client-Login' => $request->getLogin(),
                'Content-Type' => 'application/json; charset=utf-8',
            ],
            'json' => [
                'method' => $request->getMethod(),
                'params' => $request->getParams(),
            ],
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
}