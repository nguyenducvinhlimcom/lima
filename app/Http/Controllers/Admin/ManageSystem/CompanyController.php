<?php

namespace App\Http\Controllers\Admin\ManageSystem;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Repositories\AddressRepository;
use App\Repositories\CompanyRepository;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CompanyController extends Controller
{
    function __construct(
        private readonly CompanyRepository $companyRepository,
        private readonly AddressRepository $addressRepository
    ){
    }

    public function index()
    {
        $provinces = $this->addressRepository->all('name', 'asc');
        $company = $this->companyRepository->findWithRelations(config('app.id'), 'province.districts.wards');

        return view('admin.system.companies.index', compact(
            'company',
            'provinces'
        ));
    }

    public function update(Company $company, CompanyRequest $request)
    {
        $company = $this->companyRepository->find(config('app.id'));

        try {
            $company = $this->companyRepository->updateBy($company, $request->except($request->inputFields));
        } catch (QueryException) {
            return false;
        }

        return redirect()->back();
    }

}
