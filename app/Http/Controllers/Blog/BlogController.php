<?php
/**
 * Created by PhpStorm.
 * User: Elvis
 * Date: 02/11/2015
 * Time: 17:04
 */

namespace App\Http\Controllers\Blog;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Faker\Factory as Faker;

class BlogController extends Controller
{
    public function index()
    {
        $faker = Faker::create();

        $posts = [];

//        foreach(range(1,4) as $i)
//        {
//            $posts[$i]['data'] = $faker->date('d-m-Y');
//            $posts[$i]['autor'] = $faker->name();
//            $posts[$i]['imagem'] = $faker->imageUrl(640, 350);
//            $posts[$i]['titulo'] = $faker->sentence();
//            $posts[$i]['subtitulo'] = '';
//            $posts[$i]['texto'] = $faker->realText(1000);
//            $posts[$i]['tags'] = '';
//        }

        $posts = Post::all();

        // dd($posts);

        return view('blog.index', compact('posts'));
    }
}