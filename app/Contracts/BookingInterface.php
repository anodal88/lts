<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/8/18
 * Time: 11:18 PM
 */

namespace App\Contracts;


interface BookingInterface
{
    public function getPrincipalFirstName();

    public function getPrincipalLastName();

    public function getSpecialRequests();

    public function getItinerary();

    public function getStatus();

    public function getConfirmationNumbers();

    public function getCancellationNumbers();

    public function getItineraryNumber();

    public function getCurrencyCode();

    public function getExchangeRate();

    public function isCommissionable();

    public function isSpecialOffer();

    public function getCommission();

    public function getTotal();

    public function getTaxes();

    public function getSurcharges();

    public function getRatesBreakdown();


}