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

    public function __construct(SabrePropertyProxy $proxy, Serializer $serializer, SabrePropertyRepository $repo)
    {
        $this->propertyProxy = $proxy;
        $this->serializer = $serializer;
        $this->repository=$repo;
    }

    /**
     * @param SearchAvailabilityFormRequest $request
     * @return static
     */
    public function search(SearchAvailabilityFormRequest $request){
        $data = $request->validated();
        $data['property_codes'] = $this->repository->getHotelCodeList();
        /** @var AvailabilityResponse $response */
        $response = $this->propertyProxy->search($data);
        $data = $this->serializer->toArray($response);
        return JsonResponse::create($data,Response::HTTP_OK);
    }
}
