<?php

declare(strict_types=1);

/*
 * This file is part of GetCake PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\GetCake\API;

use Plients\Http\HttpResponse;

class Get extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function getCurrencies(): HttpResponse
    {
        return $this->client->get('2/get.asmx/GetCurrencies');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function getDispositionTypes(): HttpResponse
    {
        return $this->client->get('3/get.asmx/GetDispositionTypes');
    }
}
