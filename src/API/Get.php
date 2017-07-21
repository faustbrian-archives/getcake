<?php

/*
 * This file is part of GetCake PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GetCake\API;

use BrianFaust\Http\HttpResponse;

class Get extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getCurrencies(): HttpResponse
    {
        return $this->client->get('2/get.asmx/GetCurrencies');
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getDispositionTypes(): HttpResponse
    {
        return $this->client->get('3/get.asmx/GetDispositionTypes');
    }
}
