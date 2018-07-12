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

    /**
     * @param Request|ReportRequest $request
     * @return Response
     * @throws \direct\exceptions\ApiException
     * @throws \direct\exceptions\WrapperException
     */
    public function send($request): Response
    {
        $uri = $this->sandbox ?
            'https://api-sandbox.direct.yandex.com/json/v5/' :
            'https://api.direct.yandex.com/json/v5/';

        $options = [
            'headers' => [
                'Authorization' => "Bearer {$request->getToken()}",
                'Accept-Language' => $request->getLanguage(),
                'Client-Login' => $request->getLogin(),
                'Content-Type' => 'application/json; charset=utf-8',
            ],
            'json' => [
                'params' => $request->getParams(),
            ],
        ];

        if ($request instanceof Request) {
            $options['json']['method'] = $request->getMethod();
        }

        $httpClient = new \GuzzleHttp\Client(['base_uri' => $uri]);
        $httpResponse = $httpClient->post($request->getService(), $options);
        
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