<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use View;
use App\Models\chung_loai;
use App\Models\nguoi_dung;
use App\Models\san_pham;
use App\Models\loai_san_pham;
class AppServiceProvider extends ServiceProvider
{
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
        //
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
        View::composer('*', function ($view) {
            $shareUS_chung_loai = chung_loai::all(); 
            $shareUS_nguoi_Dung = nguoi_dung::all();
            $shareUS_maxPrice = number_format(san_pham::max('gia'));
            $shareUS_minPrice = number_format(san_pham::min('gia'));
            $shareUS_loai_sp  = loai_san_pham::all(); 
            $view->with([
                'shareUS_chung_loai' => $shareUS_chung_loai,
                'shareUS_nguoi_Dung' => $shareUS_nguoi_Dung,
                'shareUS_maxPrice' => $shareUS_maxPrice,
                'shareUS_minPrice' => $shareUS_minPrice,
                'shareUS_loai_sp' => $shareUS_loai_sp ,
            ]); 
        });
    }
}
