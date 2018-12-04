<?php

namespace App\Http\Controllers\Sabre;


use App\Http\Outputs\Common\Hotel\AvailabilityResponse;
use App\Http\Requests\SearchAvailabilityFormRequest;
use App\IntegrationHub\Vendors\Sabre\SabrePropertyProxy;
use App\Repository\SabrePropertyRepository;
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

    /** @var SabrePropertyRepository */
    private $repository;

    public function __construct(SabrePropertyProxy $proxy,Serializer $serializer,SabrePropertyRepository $repo)
    {
        $this->propertyProxy = $proxy;
        $this->serializer = $serializer;
        $this->repository=$repo;
    }

    public function search(SearchAvailabilityFormRequest $request){
        $data = $request->validated();
        dd($data,$this->repository->getHotelCodeList());
        $properties = $this->propertyProxy->search([]);
        $dataResponse = (new AvailabilityResponse())->setSuccess(true)->setProperties($properties);
        $data = $this->serializer->toArray($dataResponse);
        return JsonResponse::create($data,Response::HTTP_OK);
    }
}
