<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 7; $i++) {
            $g = Faker\Factory::create();
            $t = $g->sentence();
            Post::create([
                "title" => $t,
                "slug" => str_slug($t),
                "content" => $g->text(),
                "published" => true,
                "visibility" => 1
            ]);
        }
    }
}
