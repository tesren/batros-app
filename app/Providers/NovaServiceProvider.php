<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use App\Nova\User;
use App\Nova\Agent;
use App\Nova\Message;
use App\Nova\PaymentPlan;
use App\Nova\Section;
use App\Nova\Shape;
use App\Nova\Unit;
use App\Nova\Dashboards\Main;
use Illuminate\Http\Request;
use Laravel\Nova\Menu\MenuSection;
use Illuminate\Support\Facades\Blade;


class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::dashboard(Main::class)->icon('template'),
               
                MenuSection::resource(Section::class)->icon('office-building'),
                MenuSection::resource(Unit::class)->icon('home'),
               
                MenuSection::resource(Agent::class)->icon('user-group'),
                MenuSection::resource(PaymentPlan::class)->icon('currency-dollar'),
                MenuSection::resource(Message::class)->icon('inbox-in'),
                MenuSection::resource(Shape::class)->icon('cube'),
                MenuSection::resource(User::class)->icon('user'),

            ];
        });

        Nova::footer(function ($request) {
            return Blade::render('
                <div class="mt-8 leading-normal text-xs text-gray-500 space-y-1">
                    <p class="text-center">Powered by <a href="https://punto401.com/" target="_blank" rel="noopener noreferrer" class="link-default">Punto401</a></p>
                </div>
            ');
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
