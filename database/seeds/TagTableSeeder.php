<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tag::truncate(); // comentado para n�o gerar erro co as chaves extrangeiras

        factory(Tag::class, 10)->create();
    }
}
