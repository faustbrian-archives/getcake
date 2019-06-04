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

class Offers extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function addLinkCreative(array $parameters): HttpResponse
    {
        return $this->client->get('2/offers.asmx/AddLinkCreative', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function applyForOffer(array $parameters): HttpResponse
    {
        return $this->client->get('2/offers.asmx/ApplyForOffer', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function creativeFeed(array $parameters): HttpResponse
    {
        return $this->client->get('2/offers.asmx/CreativeFeed', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function getCampaign(array $parameters): HttpResponse
    {
        return $this->client->get('2/offers.asmx/GetCampaign', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function getCreativeCode(array $parameters): HttpResponse
    {
        return $this->client->get('2/offers.asmx/GetCreativeCode', $parameters);
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function getCreativeFeeds(): HttpResponse
    {
        return $this->client->get('2/offers.asmx/GetCreativeFeeds');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function getCreativeTypes(): HttpResponse
    {
        return $this->client->get('2/offers.asmx/GetCreativeTypes');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function getFeaturedOffer(): HttpResponse
    {
        return $this->client->get('2/offers.asmx/GetFeaturedOffer');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function getMediaTypeCategories(): HttpResponse
    {
        return $this->client->get('2/offers.asmx/GetMediaTypeCategories');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function getOfferStatuses(): HttpResponse
    {
        return $this->client->get('2/offers.asmx/GetOfferStatuses');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function getPixelTokens(): HttpResponse
    {
        return $this->client->get('2/offers.asmx/GetPixelTokens');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function getSuppressionList(): HttpResponse
    {
        return $this->client->get('2/offers.asmx/GetSuppressionList');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function getTags(): HttpResponse
    {
        return $this->client->get('2/offers.asmx/GetTags');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function getVerticalCategories(): HttpResponse
    {
        return $this->client->get('2/offers.asmx/GetVerticalCategories');
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function getVerticals(): HttpResponse
    {
        return $this->client->get('2/offers.asmx/GetVerticals');
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function getSubAffiliates(array $parameters): HttpResponse
    {
        return $this->client->get('2/offers.asmx/GetSubAffiliates', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function offerFeed(array $parameters): HttpResponse
    {
        return $this->client->get('4/offers.asmx/OfferFeed', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function sendCreativePack(array $parameters): HttpResponse
    {
        return $this->client->get('2/offers.asmx/SendCreativePack', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function setPixel(array $parameters): HttpResponse
    {
        return $this->client->get('2/offers.asmx/SetPixel', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function setPostbackUrl(array $parameters): HttpResponse
    {
        return $this->client->get('2/offers.asmx/SetPostbackURL', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function setTestLink(array $parameters): HttpResponse
    {
        return $this->client->get('2/offers.asmx/SetTestLink', $parameters);
    }
}
