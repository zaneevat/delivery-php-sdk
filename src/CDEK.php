<?php

namespace Zaneevat\Delivery;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Zaneevat\Delivery\Calculation\CalculationData;
use Zaneevat\Delivery\Calculation\CalculationResponse;

class CDEK
{
    private string $url = 'https://api.cdek.ru/v2/';
    private HttpClientInterface $client;
    private string $token = '';
    private ?\DateTime $tokenExpiredAt = null;

    private function __construct()
    {
        $this->client = HttpClient::create();
    }

    public function calculation(CalculationData $calculationData): CalculationResponse
    {
        return new CalculationResponse();
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    private function setToken(string $token): void
    {
        $this->token = $token;
    }

    private function setTokenExpiredAt(?\DateTime $dateTime = null)
    {
        $this->tokenExpiredAt = $dateTime;
    }

    /**
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ClientExceptionInterface
     * @throws \JsonException
     */
    private function auth(string $account, string $secret)
    {
        if ($this->tokenExpiredAt && $this->token && $this->tokenExpiredAt > new \DateTime()) {
            return;
        }

        $authResponse = $this->request('POST', "{$this->url}oauth/token", [
            'query' => [
                'grant_type' => 'client_credentials',
                'client_id' => $account,
                'client_secret' => $secret,
            ],
        ]);

        $data = json_decode($authResponse->getContent(), true, 512, JSON_THROW_ON_ERROR);

        $this->setToken($data['access_token']);
        $this->setTokenExpiredAt((new \DateTime())->modify(sprintf('+%s seconds', $data['expires_in'])));
    }

    /**
     * @throws TransportExceptionInterface
     */
    private function request(string $method, string $url, array $options): ResponseInterface
    {
        $options['max_duration'] = $options['max_duration'] ?? 3;

        return $this->client->request($method, $url, $options);
    }

    /**
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ClientExceptionInterface
     * @throws \JsonException
     */
    public static function create(string $account, string $secret, string $url = ''): self
    {
        $cdek = new self();

        if ($url) {
            $cdek->setUrl($url);
        }

        $cdek->auth($account, $secret);

        return $cdek;
    }
}
