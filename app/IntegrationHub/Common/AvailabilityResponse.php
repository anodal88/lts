<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <anodal@reloquest.com>
 * Date: 11/18/18
 * Time: 9:20 PM
 */

namespace App\IntegrationHub\Common;


use App\IntegrationHub\Common\Hotel\AvailableProperty;

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