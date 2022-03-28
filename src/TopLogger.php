<?php

namespace RubenVanErk\TopLoggerPhpSdk;

use Http\Client\Common\HttpMethodsClientInterface;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Message\UriFactory;
use RubenVanErk\TopLoggerPhpSdk\Endpoints\Gyms;
use RubenVanErk\TopLoggerPhpSdk\Endpoints\Users;

final class TopLogger
{
    private ClientBuilder $clientBuilder;

    public function __construct(ClientBuilder $clientBuilder = null, UriFactory $uriFactory = null)
    {
        $this->clientBuilder = $clientBuilder ?: new ClientBuilder();
        $uriFactory = $uriFactory ?: Psr17FactoryDiscovery::findUriFactory();
        $this->clientBuilder->addPlugin(
            new BaseUriPlugin($uriFactory->createUri('https://api.toplogger.nu/v1'))
        );
        $this->clientBuilder->addPlugin(
            new HeaderDefaultsPlugin(
                [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ]
            )
        );
    }

    public function getHttpClient(): HttpMethodsClientInterface
    {
        return $this->clientBuilder->getHttpClient();
    }

    public function gyms(): Gyms
    {
        return new Gyms($this);
    }

    public function users(): Users
    {
        return new Users($this);
    }
}