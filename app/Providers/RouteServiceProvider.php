<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->routes(function () {
            // Rutas principales
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            // Rutas de administración
            Route::middleware('web')
                ->prefix('admin')
                ->group(base_path('routes/admin.php'));
        });
    }
}
