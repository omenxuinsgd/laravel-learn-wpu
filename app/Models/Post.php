<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_posts = [[
        "title" => "Postingan 1",
        "slug" => "postingan-1",
        "author" => "Saya",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati enim, ipsum vero fugiat doloremque laboriosam quod? Beatae quod enim dignissimos. Doloribus corrupti reiciendis magni enim reprehenderit provident porro odit expedita fugit optio pariatur tenetur nulla, quasi quis accusantium maiores aliquid obcaecati nemo molestiae rem! Provident cupiditate, officia numquam nobis enim libero facere modi esse suscipit pariatur placeat inventore tempore sapiente temporibus vel perspiciatis iste consequuntur repellat nam necessitatibus porro quisquam iusto! Numquam at porro molestias atque aut, id consequuntur aliquid."
    ],
    [
        "title" => "Postingan 2",
        "slug" => "postingan-2",
        "author" => "Aku",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati enim, ipsum vero fugiat doloremque laboriosam quod? Beatae quod enim dignissimos. Doloribus corrupti reiciendis magni enim reprehenderit provident porro odit expedita fugit optio pariatur tenetur nulla, quasi quis accusantium maiores aliquid obcaecati nemo molestiae rem! Provident cupiditate, officia numquam nobis enim libero facere modi esse suscipit pariatur placeat inventore tempore sapiente temporibus vel perspiciatis iste consequuntur repellat nam necessitatibus porro quisquam iusto! Numquam at porro molestias atque aut, id consequuntur aliquid."
    ]
    ];

    public static function all() {
        // return self::$blog_posts;

        // collection
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        // $posts = self::$blog_posts;

        // collection
        $posts = static::all();

        // $new_post = [];

        // foreach ($posts as $item) {
        //     if($item["slug"] === $slug){
        //         $new_post = $item;
        //     };
        // }

        // return $new_post;

        return $posts->firstWhere('slug', $slug);
    }
}
