<?php

/*
 * This file is part of GetCake PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GetCake\Api;

use BrianFaust\Unified\AbstractApi;

class ReportsLiteClicks extends AbstractApi
{
    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function campaignSummary($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('1/reports_lite_clicks.asmx/CampaignSummary');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function dailySummary($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('1/reports_lite_clicks.asmx/DailySummary');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function hourlySummary($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('1/reports_lite_clicks.asmx/HourlySummary');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function subAffiliateSummary($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('1/reports_lite_clicks.asmx/SubAffiliateSummary');
    }
}
