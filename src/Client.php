<?php

/*
 * This file is part of GetCake PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GetCake;

use BrianFaust\Http\Http;

class Client
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $affiliateId;

    /**
     * Create a new client instance.
     *
     * @param string $domain
     * @param string $apiKey
     * @param string $affiliateId
     */
    public function __construct(string $domain, string $apiKey, string $affiliateId)
    {
        $this->domain = $domain;
        $this->apiKey = $apiKey;
        $this->affiliateId = $affiliateId;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \BrianFaust\GetCake\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri("{$this->domain}/affiliates/api/?api_key={$this->apiKey}&affiliate_id={$this->affiliateId}");

        $class = "BrianFaust\\GetCake\\API\\{$name}";

        return new $class($client);
    }
}
