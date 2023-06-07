<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //Variables used in factory data
        $description = "
            

Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

        ";
        $name = 'LARGE CHARLOTTE HOOPS';
        $slug = Str::slug($name);
        $price = $this->faker->numberBetween($min = 80, $max = 1000);
        // $image = $this->faker->imageUrl($width = 408, $height = 418);
        $image = "2.jpg";

        return [
            'name' => $name,
            'slug' => $slug,
            'description' => $description,
            'short_description' => $this->faker->text(100),
            'image_name' => $image,
            'price' => $price,
            'stock_status' => "in",
            'sale_price' => $price - 40,
            'platinum_price' => $price + 100,
            'platinum_sale_price' => $price + (100 - 40),
            'gold_price' => $price + 150,
            'gold_sale_price' => $price + (150 - 40),
            'all_pack_price' => $price + 200,
            'all_pack_sale_price' => $price + (200 - 40),
            'color_name' => 'ESTORIL Green MET',
            'color_code' => 'B45',
            'SKU' => 'CND-BSC-000233-010447',
            'EAN' => '7091196556818',
            'package' => 'Gold',
        ];
    }
}
