<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            //     - PK: id	

    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'category_id'=>$this->faker->numberBetween(1,10),
            'image_url'=>$this->faker->imageUrl(),
            'desc'=> $this->faker->text(20),
            'price'=>$this->faker->numberBetween(10,30),
            'sale_percent'=>$this->faker->numberBetween(10,30),
            'stocks'=>$this->faker->numberBetween(10,30),
            'is_active'=>$this->faker->numberBetween(0,1),
        ];
    }
}
