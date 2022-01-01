<?php

namespace Database\Seeders;
use App\Models\Posts;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //lets truncate our existing records to start from scratch
        Posts::truncate();

        $faker = \Faker\Factory::create();

        //now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Posts::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
