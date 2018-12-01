<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 11/18/18
 * Time: 9:20 PM
 */

namespace App\Http\Outputs\Common\Hotel;


use App\Http\Outputs\BaseResponse;
use App\Http\Outputs\Common\AvailableProperty;


class AvailabilityResponse extends BaseResponse
{

    /**
     * @var AvailableProperty[]
     */
    protected $properties;

    /**
     * @return AvailableProperty[]
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    /**
     * @param AvailableProperty[] $properties
     * @return AvailabilityResponse
     */
    public function setProperties(array $properties): AvailabilityResponse
    {
        $this->properties = $properties;
        return $this;
    }



}