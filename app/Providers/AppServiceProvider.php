<?php

namespace App\Providers;

use App\Models\CompanyDetails;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        view()->composer(['client.layouts.menu','client.layouts.footer','client.product_details','client.layouts.header','server.layout.header','server.layout.menu-bar','server.order.invoice'], function ($view) {
            $company = CompanyDetails::get()->first();
            $view->with(compact('company'));
        });

        View::creator('*', function ($view) {
            /** @var \Illuminate\View\View $view */
            $view->with('currentViewName', $view->getName());
        });
        $project_title = '| Abrar Mart ';
        $project_copyright = 'Design and Development by Zariq Ltd';
        View::share('title', $project_title);
        View::share('copyright', $project_copyright);

    }
}
