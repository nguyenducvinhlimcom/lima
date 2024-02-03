<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceGroupStoreRequest;
use App\Http\Requests\ServiceGroupUpdateRequest;
use App\Models\ServiceGroup;
use App\Repositories\ServiceGroupRepository;

class ServiceGroupController extends Controller
{
    public function __construct(
        private readonly ServiceGroupRepository $serviceGroupRepository
    ){
    }

    public function index()
    {
        $servicesGroups = $this->serviceGroupRepository->paginated('order');

        return view('admin.categories.service_group.index', compact('servicesGroups'));
    }

    public function create()
    {
        return view('admin.categories.service_group.create');
    }

    public function store(ServiceGroupStoreRequest $request)
    {
        $this->serviceGroupRepository->create($request->validated());

        return redirect()->route('admin.categories.service_groups.index');
    }


    public function edit(ServiceGroup $serviceGroup)
    {
        return view('admin.categories.service_group.edit', compact('serviceGroup'));
    }

    public function update(ServiceGroupUpdateRequest $request, ServiceGroup $serviceGroup)
    {
        $this->serviceGroupRepository->updateBy($serviceGroup, $request->validated());

        session()->flash('status', 'Đã lưu thành công.');

        return redirect()->route('admin.categories.service_groups.edit', $serviceGroup);
    }

    public function destroy(ServiceGroup $serviceGroup)
    {
        $serviceGroup->delete();

        return redirect()->route('admin.categories.service_groups.index');
    }
}
