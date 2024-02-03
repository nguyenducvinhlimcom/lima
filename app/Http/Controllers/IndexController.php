<?php

namespace App\Http\Controllers;

use App\Repositories\BannerRepository;
use App\Repositories\FeedbackRepository;
use App\Repositories\ServiceGroupRepository;
use App\Library\SEOMeta;

class IndexController extends Controller
{
    public function __construct(
        private readonly BannerRepository $bannerRepository,
        private readonly FeedbackRepository $feedbackRepository,
        private readonly ServiceGroupRepository $serviceGroupRepository
    ){

    }

    public function index()
    {
        $banners = $this->bannerRepository->cacheBanners('order');
        $feedbacks = $this->feedbackRepository->cacheFeedbacks('order');
        $homeServiceGroups = $this->serviceGroupRepository->cacheHomeServiceGroups('order', 'asc', ['services']);

        return view('frontend.index', compact(
            'banners',
            'feedbacks',
            'homeServiceGroups'
        ));
    }

    public function service_groups($slug)
    {
        $serviceGroup = $this->serviceGroupRepository->findKey($slug);

        SEOMeta::init(
            asset($serviceGroup->avatar_file_name),
            $serviceGroup->name_page,
            $serviceGroup->keywords_seo,
            $serviceGroup->description_seo,
            'article'
        );

        return view('frontend.service_group', compact('serviceGroup'));
    }
}
