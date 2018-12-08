<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 11/1/18
 * Time: 9:58 PM
 */

namespace App\IntegrationHub\Contracts;


use App\Http\Outputs\Common\Hotel\AvailabilityResponse;

interface IPropertyProvider
{
    const SABRE_PROPERTY_PROVIDER='SABRE';


    /**
     *  Get available properties with the given parameters
     * @param $params
     * @return AvailabilityResponse
     */
    public function search($params):AvailabilityResponse;

    /**
     * Get the property associated information
     * @param $id
     * @return mixed
     */
    public function getProperty($id);

    /**
     * Get all the rates available from the given parameters
     * @param $params
     * @return mixed
     */
    public function getRates($params);

    /**
     * Create a reservation using the given params
     * @param $params
     * @return mixed
     */
    public function createReservation($params);

    /**
     * Retrieve all reservation data from the provider side
     * @param $id
     * @return mixed
     */
    public function retrieveReservation($id);

    /**
     * Update a reservation using the given params
     * @param $params
     * @return mixed
     */
    public function updateReservation($params);

    /**
     * Cancel the specified reservation in the provider side
     * @param $id
     * @return mixed
     */
    public function cancelReservation($id);
}