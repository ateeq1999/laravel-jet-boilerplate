<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => random_int(2,16),
            'number' => random_int(2,16),
            'ar' => [
                'name' => 'اسم',
            ],
            'en' => [
                'name' => $this->faker->name,
            ],
        ];
    }
}
