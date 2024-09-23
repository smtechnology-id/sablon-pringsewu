<?php

namespace App\Providers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Cart; // Pastikan untuk mengimpor model Cart jika diperlukan

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
        // Menggunakan view()->share() untuk membagikan $cartCount ke semua view
        View::composer('*', function ($view) {
           if(Auth::check()){
            $cartCount = Cart::where('user_id', Auth::user()->id)->count();
            $view->with('cartCount', $cartCount);
           }
           if(Auth::check()){
            $orderCount = Order::where('user_id', Auth::user()->id)->count();
            $view->with('orderCount', $orderCount);
           }
        });
    }
}
