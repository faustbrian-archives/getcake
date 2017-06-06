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

class Offers extends AbstractApi
{
    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function addLinkCreative($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/offers.asmx/AddLinkCreative');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function applyForOffer($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/offers.asmx/ApplyForOffer');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function creativeFeed($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/offers.asmx/CreativeFeed');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function getCampaign($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/offers.asmx/GetCampaign');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function getCreativeCode($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/offers.asmx/GetCreativeCode');
    }

    /**
     * @return mixed
     */
    public function getCreativeFeeds()
    {
        return $this->get('2/offers.asmx/GetCreativeFeeds');
    }

    /**
     * @return mixed
     */
    public function getCreativeTypes()
    {
        return $this->get('2/offers.asmx/GetCreativeTypes');
    }

    /**
     * @return mixed
     */
    public function getFeaturedOffer()
    {
        return $this->get('2/offers.asmx/GetFeaturedOffer');
    }

    /**
     * @return mixed
     */
    public function getMediaTypeCategories()
    {
        return $this->get('2/offers.asmx/GetMediaTypeCategories');
    }

    /**
     * @return mixed
     */
    public function getOfferStatuses()
    {
        return $this->get('2/offers.asmx/GetOfferStatuses');
    }

    /**
     * @return mixed
     */
    public function getPixelTokens()
    {
        return $this->get('2/offers.asmx/GetPixelTokens');
    }

    /**
     * @return mixed
     */
    public function getSuppressionList()
    {
        return $this->get('2/offers.asmx/GetSuppressionList');
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->get('2/offers.asmx/GetTags');
    }

    /**
     * @return mixed
     */
    public function getVerticalCategories()
    {
        return $this->get('2/offers.asmx/GetVerticalCategories');
    }

    /**
     * @return mixed
     */
    public function getVerticals()
    {
        return $this->get('2/offers.asmx/GetVerticals');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function getSubAffiliates($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/offers.asmx/GetSubAffiliates');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function offerFeed($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('4/offers.asmx/OfferFeed');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function sendCreativePack($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/offers.asmx/SendCreativePack');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function setPixel($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/offers.asmx/SetPixel');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function setPostbackUrl($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/offers.asmx/SetPostbackURL');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function setTestLink($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/offers.asmx/SetTestLink');
    }
}
