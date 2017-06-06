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

class BaseUriModifier extends AbstractModifier
{
    public function apply()
    {
        $this->httpClient->setOption('base_uri', $this->httpClient->getConfig('domain'));

        return $this->httpClient;
    }
}
