<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\AddressRepository;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function __construct(
        private readonly AddressRepository $addressRepository
    ){
    }

    public function provinces()
    {
        $provinces = $this->addressRepository->all('name', 'asc');

        return response()->json($provinces);
    }


    public function getDistricts(Request $request)
    {
        $districts = $this->addressRepository->getDistricts('name', 'asc', $request->query('province'));

        return response()->json($districts);
    }


    public function getWards(Request $request)
    {
        $wards = $this->addressRepository->getWards('name', 'asc', $request->query('district'));

        return response()->json($wards);
    }
}
