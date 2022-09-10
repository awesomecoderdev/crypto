<?php

namespace Database\Seeders;

use App\Models\Admin\Article;
use Illuminate\Database\Seeder;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factorey
        $faker = \Faker\Factory::create();
        $name = $faker->name;
        $post = Article::create([
            "title" => $name,
            // "slug" => $name,
            // "slug" => SlugService::createSlug(News::class, "slug", $name),
            "thumbnail" => $faker->randomElement([
                url('img/chart2.jpg'),
                url('img/chart.jpg'),
                url('img/bitcoin.jpg'),
                url('img/eth.jpg'),
            ]),
            "content" => $faker->text,
            "tags" => [
                "btc",
                "eth",
                "solana",
                "news"
            ],
            "views" => $faker->numberBetween(1, 1000),
            "author" => 1,
            "status" => 1
        ]);
    }
}
