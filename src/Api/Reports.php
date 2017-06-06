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

class Reports extends AbstractApi
{
    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function bills($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('3/reports.asmx/Bills');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function campaignSummary($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('5/reports.asmx/CampaignSummary');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function clicks($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('8/reports.asmx/Clicks');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function conversions($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('8/reports.asmx/Conversions');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function dailySummary($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/reports.asmx/DailySummary');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function hourlySummary($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/reports.asmx/HourlySummary');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function networkNews($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/reports.asmx/NetworkNews');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function offerCompliance($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('3/reports.asmx/OfferCompliance');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function orderDetails($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/reports.asmx/OrderDetails');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function orderDetailChanges($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/reports.asmx/OrderDetailChanges');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function performanceSummary($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/reports.asmx/PerformanceSummary');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function topOfferSummary($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/reports.asmx/TopOfferSummary');
    }
}
