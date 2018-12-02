<?php

namespace App\Http\Controllers\Sabre;


use App\Http\Outputs\Common\Hotel\AvailabilityResponse;
use App\Http\Requests\SearchAvailabilityFormRequest;
use App\IntegrationHub\Vendors\Sabre\SabrePropertyProxy;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use JMS\Serializer\Serializer;

class SabrePropertyController extends Controller
{
    /** @var SabrePropertyProxy  $propertyProxy*/
    private $propertyProxy;
    /** @var Serializer */
    private $serializer;

    public function __construct(SabrePropertyProxy $proxy,Serializer $serializer)
    {
        $this->propertyProxy = $proxy;
        $this->serializer = $serializer;
    }

    public function search(SearchAvailabilityFormRequest $request){
        $data = $request->validated();
        dd($data);
        $properties = $this->propertyProxy->search([]);
        $dataResponse = (new AvailabilityResponse())->setSuccess(true)->setProperties($properties);
        $data = $this->serializer->toArray($dataResponse);
        return JsonResponse::create($data,Response::HTTP_OK);
    }
}
