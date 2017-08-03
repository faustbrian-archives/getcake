<?php

declare(strict_types=1);

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

class ReportsLiteClicks extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function campaignSummary(array $parameters): HttpResponse
    {
        return $this->client->get('1/reports_lite_clicks.asmx/CampaignSummary', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function dailySummary(array $parameters): HttpResponse
    {
        return $this->client->get('1/reports_lite_clicks.asmx/DailySummary', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function hourlySummary(array $parameters): HttpResponse
    {
        return $this->client->get('1/reports_lite_clicks.asmx/HourlySummary', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function subAffiliateSummary(array $parameters): HttpResponse
    {
        return $this->client->get('1/reports_lite_clicks.asmx/SubAffiliateSummary', $parameters);
    }
}
