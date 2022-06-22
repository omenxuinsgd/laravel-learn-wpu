<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Nur Rokhman",
        "email" => "nurrokhman0302@gmail.com",
        "image" => "images/resmi-uinsgd.png",
        "blade" => "pake blade templating engine guys!"
    ]);
});

// Route::get('/blog', function () {
//     // $blog_posts = [[
//     //     "title" => "Postingan 1",
//     //     "slug" => "postingan-1",
//     //     "author" => "Saya",
//     //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati enim, ipsum vero fugiat doloremque laboriosam quod? Beatae quod enim dignissimos. Doloribus corrupti reiciendis magni enim reprehenderit provident porro odit expedita fugit optio pariatur tenetur nulla, quasi quis accusantium maiores aliquid obcaecati nemo molestiae rem! Provident cupiditate, officia numquam nobis enim libero facere modi esse suscipit pariatur placeat inventore tempore sapiente temporibus vel perspiciatis iste consequuntur repellat nam necessitatibus porro quisquam iusto! Numquam at porro molestias atque aut, id consequuntur aliquid."
//     // ],
//     // [
//     //     "title" => "Postingan 2",
//     //     "slug" => "postingan-2",
//     //     "author" => "Aku",
//     //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati enim, ipsum vero fugiat doloremque laboriosam quod? Beatae quod enim dignissimos. Doloribus corrupti reiciendis magni enim reprehenderit provident porro odit expedita fugit optio pariatur tenetur nulla, quasi quis accusantium maiores aliquid obcaecati nemo molestiae rem! Provident cupiditate, officia numquam nobis enim libero facere modi esse suscipit pariatur placeat inventore tempore sapiente temporibus vel perspiciatis iste consequuntur repellat nam necessitatibus porro quisquam iusto! Numquam at porro molestias atque aut, id consequuntur aliquid."
//     // ]
//     // ];

//     // return view('posts', [
//     //     "title" => "Blog",
//     //     "posts" => $blog_posts
//     // ]);

//     return view('posts', [
//         "title" => "Blog",
//         "posts" => Post::all()
//     ]);
// });

// menggunakan controller
Route::get('/blog', [PostController::class, 'index']);

// halaman single page
// Route::get('/post/{slug}', function($slug){
//     // $blog_posts = [[
//     //     "title" => "Postingan 1",
//     //     "slug" => "postingan-1",
//     //     "author" => "Saya",
//     //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati enim, ipsum vero fugiat doloremque laboriosam quod? Beatae quod enim dignissimos. Doloribus corrupti reiciendis magni enim reprehenderit provident porro odit expedita fugit optio pariatur tenetur nulla, quasi quis accusantium maiores aliquid obcaecati nemo molestiae rem! Provident cupiditate, officia numquam nobis enim libero facere modi esse suscipit pariatur placeat inventore tempore sapiente temporibus vel perspiciatis iste consequuntur repellat nam necessitatibus porro quisquam iusto! Numquam at porro molestias atque aut, id consequuntur aliquid."
//     // ],
//     // [
//     //     "title" => "Postingan 2",
//     //     "slug" => "postingan-2",
//     //     "author" => "Aku",
//     //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati enim, ipsum vero fugiat doloremque laboriosam quod? Beatae quod enim dignissimos. Doloribus corrupti reiciendis magni enim reprehenderit provident porro odit expedita fugit optio pariatur tenetur nulla, quasi quis accusantium maiores aliquid obcaecati nemo molestiae rem! Provident cupiditate, officia numquam nobis enim libero facere modi esse suscipit pariatur placeat inventore tempore sapiente temporibus vel perspiciatis iste consequuntur repellat nam necessitatibus porro quisquam iusto! Numquam at porro molestias atque aut, id consequuntur aliquid."
//     // ]
//     // ];

//     // $new_post = [];

//     // foreach ($blog_posts as $item) {
//     //     if($item["slug"] === $slug){
//     //         $new_post = $item;
//     //     };
//     // }

//     // return view('post', [
//     //     "title" => "post",
//     //     "posting" => $new_post
//     // ]);

//     return view('post', [
//         "title" => "post",
//         "posting" => Post::find($slug)
//     ]);
// });

// controller
Route::get('/post/{slug}', [PostController::class, 'show']);