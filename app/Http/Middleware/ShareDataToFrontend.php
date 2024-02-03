<?php

namespace App\Http\Middleware;

use App\Library\SEOMeta;
use App\Repositories\CompanyRepository;
use App\Repositories\ServiceGroupRepository;
use Closure;
use Illuminate\Http\Request;

class ShareDataToFrontend
{

    public function __construct(
        private readonly CompanyRepository $companyRepository,
        private readonly ServiceGroupRepository $serviceGroupRepository,
    ){
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (!$request->is('admin/*') || $request->is('admin/login')) {
            $company = $this->companyRepository->cacheFind(config('app.id'));
            $service_groups = $this->serviceGroupRepository->cacheMenuServiceGroups('order');

            SEOMeta::init(
                asset($company->avatar_file_name),
                $company->company_name,
                $company->keywords_seo,
                $company->note,
                'website'
            );

            view()->share('company', $company);
            view()->share('service_groups', $service_groups);
        }

        return $next($request);
    }
}
