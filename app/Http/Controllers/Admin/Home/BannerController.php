<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerStoreRequest;
use App\Http\Requests\BannerUpdateRequest;
use App\Models\Banner;
use App\Repositories\BannerRepository;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function __construct(
        private readonly BannerRepository $bannerRepository
    ) {
    }

    public function index()
    {
        $banners = $this->bannerRepository->paginated('order');

        return view('admin.home.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.home.banners.create');
    }

    public function store(BannerStoreRequest $request)
    {
        $this->bannerRepository->create($request->validated());

        return redirect()->route('admin.home.banners.index');
    }

    public function edit(Banner $banner)
    {
        return view('admin.home.banners.edit', compact('banner'));
    }

    public function update(BannerUpdateRequest $request, Banner $banner)
    {
        $this->bannerRepository->updateBy($banner, $request->validated());

        session()->flash('status', 'Đã lưu thành công.');

        return redirect()->route('admin.home.banners.edit', $banner);
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();

        return redirect()->route('admin.home.banners.index');
    }
}
