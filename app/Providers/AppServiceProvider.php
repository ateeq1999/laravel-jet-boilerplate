<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        $models_scores = [
            'waterfall' => [
                'requirements' => 7,
                'cost' => 7,
                'duration' => 7,
                'flexible_to_change' => 3,
                'customer_availability' => 3,
                'simplicity_ratio' => 3,
                'project_size' => 7,
                'project_complex' => 7,
            ],

            'incremental' => [
                'requirements' => 7,
                'cost' => 7,
                'duration' => 5,
                'flexible_to_change' => 7,
                'customer_availability' => 3,
                'simplicity_ratio' => 7,
                'project_size' => 7,
                'project_complex' => 3,
            ],

            'spiral' => [
                'requirements' => 3,
                'cost' => 7,
                'duration' => 7,
                'flexible_to_change' => 7,
                'customer_availability' => 7,
                'simplicity_ratio' => 3,
                'project_size' => 7,
                'project_complex' => 7,
            ],

            'v_process' => [
                'requirements' => 7,
                'cost' => 7,
                'duration' => 5,
                'flexible_to_change' => 3,
                'customer_availability' => 5,
                'simplicity_ratio' => 7,
                'project_size' => 3,
                'project_complex' => 5,
            ],

            'scrum' => [
                'requirements' => 7,
                'cost' => 3,
                'duration' => 3,
                'flexible_to_change' => 7,
                'customer_availability' => 7,
                'simplicity_ratio' => 7,
                'project_size' => 7,
                'project_complex' => 7,
            ],
        ];

        if(session()->put('models_scores') == null){
            session()->put('models_scores', $models_scores);
        }

    }
}
