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

class Account extends AbstractApi
{
    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function changeAccountInfo($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/account.asmx/ChangeAccountInfo');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function changeLanguage($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/account.asmx/ChangeLanguage');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function changeMediaTypes($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/account.asmx/ChangeMediaTypes');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function changePriceFormats($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/account.asmx/ChangePriceFormats');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function changeVerticalCategories($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/account.asmx/ChangeVerticalCategories');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function getAccountInfo($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/account.asmx/GetAccountInfo');
    }

    /**
     * @return mixed
     */
    public function getAccountManager()
    {
        return $this->get('2/account.asmx/GetAccountManager');
    }

    /**
     * @return mixed
     */
    public function getContactTypes()
    {
        return $this->get('2/account.asmx/GetContactTypes');
    }

    /**
     * @return mixed
     */
    public function getCountries()
    {
        return $this->get('2/account.asmx/GetCountries');
    }

    /**
     * @return mixed
     */
    public function getLanguages()
    {
        return $this->get('2/account.asmx/GetLanguages');
    }

    /**
     * @return mixed
     */
    public function getMediaTypes()
    {
        return $this->get('2/account.asmx/GetMediaTypes');
    }

    /**
     * @return mixed
     */
    public function getPaymentToTypes()
    {
        return $this->get('2/account.asmx/GetPaymentToTypes');
    }

    /**
     * @return mixed
     */
    public function getPriceFormats()
    {
        $this->setQuery($parameters);

        return $this->get('2/account.asmx/GetPriceFormats');
    }

    /**
     * @return mixed
     */
    public function getTaxClasses()
    {
        return $this->get('2/account.asmx/GetTaxClasses');
    }

    /**
     * @return mixed
     */
    public function getUsStates()
    {
        return $this->get('2/account.asmx/GetUSStates');
    }

    /**
     * @return mixed
     */
    public function getVerticalCategories()
    {
        return $this->get('2/account.asmx/GetVerticalCategories');
    }

    /**
     * @param $parameters
     *
     * @return mixed
     */
    public function resetPassword($parameters)
    {
        $this->setQuery($parameters);

        return $this->get('2/account.asmx/ResetPassword');
    }
}
