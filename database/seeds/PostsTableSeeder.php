<?php

use App\Post;
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
        //Post::truncate(); // comentado para não gerar erro co as chaves extrangeiras

        factory('App\Post', 15)->create();

    }
}
