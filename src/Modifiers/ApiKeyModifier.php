<?php

/*
 * This file is part of GetCake PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GetCake\Modifiers;

use BrianFaust\Modifiers\AbstractModifier;

class ApiKeyModifier extends AbstractModifier
{
    public function apply()
    {
        $this->httpClient->addQuery('api_key', $this->httpClient->getConfig('apiKey'));

        return $this->httpClient;
    }
}
