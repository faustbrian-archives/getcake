<?php

/*
 * This file is part of GetCake PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GetCake;

use BrianFaust\Unified\AbstractHttpClient;

/**
 * Class HttpClient.
 */
class HttpClient extends AbstractHttpClient
{
    /**
     * {@inheritdoc}
     */
    protected $options = [
        'headers' => [
           'User-Agent' => 'BrianFaust/GetCake',
        ],
    ];

    /**
     * {@inheritdoc}
     */
    protected $requestModifiers = [
        Modifiers\BaseUriModifier::class,
        Modifiers\AffiliateIdModifier::class,
        Modifiers\ApiKeyModifier::class,
    ];

    /**
     * @param $baseUri
     * @param $path
     *
     * @return string
     */
    protected function buildRequestUri(string $baseUri, string $path)
    {
        return $baseUri.'/affiliates/api/'.$path;
    }
}
