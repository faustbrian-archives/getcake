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

class Reports extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function bills(array $parameters): HttpResponse
    {
        return $this->client->get('3/reports.asmx/Bills', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function campaignSummary(array $parameters): HttpResponse
    {
        return $this->client->get('5/reports.asmx/CampaignSummary', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function clicks(array $parameters): HttpResponse
    {
        return $this->client->get('8/reports.asmx/Clicks', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function conversions(array $parameters): HttpResponse
    {
        return $this->client->get('8/reports.asmx/Conversions', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function dailySummary(array $parameters): HttpResponse
    {
        return $this->client->get('2/reports.asmx/DailySummary', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function hourlySummary(array $parameters): HttpResponse
    {
        return $this->client->get('2/reports.asmx/HourlySummary', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function networkNews(array $parameters): HttpResponse
    {
        return $this->client->get('2/reports.asmx/NetworkNews', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function offerCompliance(array $parameters): HttpResponse
    {
        return $this->client->get('3/reports.asmx/OfferCompliance', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderDetails(array $parameters): HttpResponse
    {
        return $this->client->get('2/reports.asmx/OrderDetails', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderDetailChanges(array $parameters): HttpResponse
    {
        return $this->client->get('2/reports.asmx/OrderDetailChanges', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function performanceSummary(array $parameters): HttpResponse
    {
        return $this->client->get('2/reports.asmx/PerformanceSummary', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function topOfferSummary(array $parameters): HttpResponse
    {
        return $this->client->get('2/reports.asmx/TopOfferSummary', $parameters);
    }
}
