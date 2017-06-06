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

use BrianFaust\Unified\AbstractClient;

/**
 * Class Client.
 */
class Client extends AbstractClient
{
    protected function getServiceProvider()
    {
        return ServiceProvider::class;
    }
}