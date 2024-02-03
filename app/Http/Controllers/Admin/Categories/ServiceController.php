<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Models\Service;
use App\Repositories\ServiceGroupRepository;
use App\Repositories\ServiceRepository;

class ServiceController extends Controller
{
    public function __construct(
        private readonly ServiceRepository $serviceRepository,
        private readonly ServiceGroupRepository $serviceGroupRepository
    ){
    }

    public function index()
    {
        $services = $this->serviceRepository->paginated();

        return view('admin.categories.services.index', compact('services',));
    }

    public function create()
    {
        $homeServiceGroups = $this->serviceGroupRepository->cacheHomeServiceGroups('order');

        return view('admin.categories.services.create', compact('homeServiceGroups'));
    }

    public function store(ServiceStoreRequest $request)
    {
        $this->serviceRepository->create($request->validated());

        return redirect()->route('admin.categories.services.index');
    }


    public function edit(Service $service)
    {
        $homeServiceGroups = $this->serviceGroupRepository->cacheHomeServiceGroups('order');

        return view('admin.categories.services.edit', compact('service', 'homeServiceGroups'));
    }

    public function update(ServiceUpdateRequest $request, Service $service)
    {
        $this->serviceRepository->updateBy($service, $request->validated());

        session()->flash('status', 'Đã lưu thành công.');

        return redirect()->route('admin.categories.services.edit', $service);
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('admin.categories.services.index');
    }
}
