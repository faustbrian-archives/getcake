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

class Account extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function changeAccountInfo(array $parameters): HttpResponse
    {
        return $this->client->get('2/account.asmx/ChangeAccountInfo', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function changeLanguage(array $parameters): HttpResponse
    {
        return $this->client->get('2/account.asmx/ChangeLanguage', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function changeMediaTypes(array $parameters): HttpResponse
    {
        return $this->client->get('2/account.asmx/ChangeMediaTypes', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function changePriceFormats(array $parameters): HttpResponse
    {
        return $this->client->get('2/account.asmx/ChangePriceFormats', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function changeVerticalCategories(array $parameters): HttpResponse
    {
        return $this->client->get('2/account.asmx/ChangeVerticalCategories', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getAccountInfo(array $parameters): HttpResponse
    {
        return $this->client->get('2/account.asmx/GetAccountInfo', $parameters);
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getAccountManager(): HttpResponse
    {
        return $this->client->get('2/account.asmx/GetAccountManager');
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getContactTypes(): HttpResponse
    {
        return $this->client->get('2/account.asmx/GetContactTypes');
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getCountries(): HttpResponse
    {
        return $this->client->get('2/account.asmx/GetCountries');
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getLanguages(): HttpResponse
    {
        return $this->client->get('2/account.asmx/GetLanguages');
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getMediaTypes(): HttpResponse
    {
        return $this->client->get('2/account.asmx/GetMediaTypes');
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getPaymentToTypes(): HttpResponse
    {
        return $this->client->get('2/account.asmx/GetPaymentToTypes');
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getPriceFormats(): HttpResponse
    {
        return $this->client->get('2/account.asmx/GetPriceFormats', $parameters);
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getTaxClasses(): HttpResponse
    {
        return $this->client->get('2/account.asmx/GetTaxClasses');
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getUsStates(): HttpResponse
    {
        return $this->client->get('2/account.asmx/GetUSStates');
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function getVerticalCategories(): HttpResponse
    {
        return $this->client->get('2/account.asmx/GetVerticalCategories');
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function resetPassword(array $parameters): HttpResponse
    {
        return $this->client->get('2/account.asmx/ResetPassword', $parameters);
    }
}
