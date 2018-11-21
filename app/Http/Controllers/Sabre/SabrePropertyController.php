<?php

namespace App\Http\Controllers\Sabre;

use App\IntegrationHub\Vendors\Sabre\SabrePropertyProxy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SabrePropertyController extends Controller
{
    /** @var SabrePropertyProxy  $propertyProxy*/
    private $propertyProxy;

    public function __construct(SabrePropertyProxy $proxy)
    {
        $this->propertyProxy = $proxy;
    }

    public function search(Request $request){
        return $this->propertyProxy->search([]);
    }
}
