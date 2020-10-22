<?php

namespace Database\Factories;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now = Carbon::now();
        return [
            'title' => $this->faker->word,
            'price' => $this->faker->randomNumber(6),
            'inventory_count' => $this->faker->randomDigitNotNull,
            'updated_at' => $now,
            'created_at' => $now,
        ];
    }
}
