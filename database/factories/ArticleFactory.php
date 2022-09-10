<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Cviebrock\EloquentSluggable\Services\SlugService;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name;
        return [
            "title" => $name,
            // "slug" => $name,
            // "slug" => SlugService::createSlug(News::class, "slug", $name),
            "thumbnail" => $this->faker->randomElement([
                url('img/chart2.jpg'),
                url('img/chart.jpg'),
                url('img/bitcoin.jpg'),
                url('img/eth.jpg'),
            ]),
            "content" => $this->faker->text,
            "keywords" => $this->faker->text,
            "description" => $this->faker->text,
            "tags" => [
                "binance",
                "babydoge",
                "solana",
            ],
            "views" => $this->faker->numberBetween(1, 1000),
            "user_id" => 1,
            "status" => 1,
        ];
    }
}
