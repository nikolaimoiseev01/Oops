<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function make_products()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $good = \App\Models\Good::create([
                'title' => 'Товар ' . $i,
                'desc' => $faker->paragraph(),
                'good_category_id' => 1,
                'capacity' => $faker->randomFloat(2, 0, 100),
                'capacity_type' => 'мл',
                'compound' => 'Химический состав',
                'properties' => [
                    [
                        'Тип свойства' => "Животное",
                        "Значение" => "Кошка"
                    ],
                    [
                        "Тип свойства" => "Вид загрязнения",
                        "Значение" => "Запах"
                    ]
                ],
                'advantages' => ["Безопасен для человека и животных", "Для любых поверхностей"],
                'instruction' => $faker->paragraph(),
                'links' => ["WB" => "vk.com", "Ozone"=> "vk.com"]
            ]);

            $good->addMediaFromUrl(url('/') . '/fixed/test/good_test_1.png')->preservingOriginal()->toMediaCollection('good_examples');
            $good->addMediaFromUrl(url('/') . '/fixed/test/good_test_2.png')->preservingOriginal()->toMediaCollection('good_examples');
            $good->addMediaFromUrl(url('/') . '/fixed/test/good_test_3.png')->preservingOriginal()->toMediaCollection('good_examples');
        }
    }

    public function make_posts() {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $post = \App\Models\Post::create([
                'title' => 'Пост ' . $i,
                'content' => $faker->paragraph(),
            ]);

            $post->addMediaFromUrl(url('/') . '/fixed/test/good_test_1.png')->preservingOriginal()->toMediaCollection('post_cover');
        }
    }

    public function run(): void
    {
        $this->make_products();
        $this->make_posts();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
