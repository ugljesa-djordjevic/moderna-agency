<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private $menu = [
        [
            "name" => "Home",
            "route" => "home"
        ],
        [
            "name" => "About",
            "route" => "about"
        ],
        [
            "name" => "Services",
            "route" => "services"
        ],
        [
            "name" => "Portfolio",
            "route" => "portfolio"
        ],
        [
            "name" => "Team",
            "route" => "team"
        ],
        [
            "name" => "Blog",
            "route" => "blog"
        ],
        [
            "name" => "Contact",
            "route" => "contact"
        ]
    ];
    private $footer = [
        [
            "name" => "Web Design",
            "route" => "#"
        ],
        [
            "name" => "Web Development",
            "route" => "#"
        ],
        [
            "name" => "Product Management",
            "route" => "#"
        ],
        [
            "name" => "Marketing",
            "route" => "#"
        ],
        [
            "name" => "Graphic Design",
            "route" => "#"
        ]
    ];
    private $social = [
        [
            "name" => "twitter",
            "route" => 'https://twitter.com/'
        ],
        [
            "name" => "facebook",
            "route" => "https://facebook.com/"
        ],
        [
            "name" => "instagram",
            "route" => "https://www.instagram.com/"
        ],
        [
            "name" => "linkedin",
            "route" => "https://www.linkedin.com/"
        ],
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('menu', $this->menu);
        View::share('footer', $this->footer);
        View::share('social', $this->social);
    }
}
