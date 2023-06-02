<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Junaidy Susilo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut corrupti blanditiis praesentium ratione quidem unde dolores fuga voluptate sapiente, voluptas officia. In, at quas quasi doloremque fuga corporis, asperiores eius impedit animi saepe odio enim molestiae, corrupti autem aspernatur maxime aliquid. Sed aut sint vel perspiciatis dolor totam nulla, doloribus voluptates, quidem similique aliquid doloremque debitis quaerat? Temporibus eveniet hic quo sint aliquam iusto eius, culpa recusandae officia laborum dolores explicabo nesciunt. Laboriosam tempore eveniet nisi maiores id iste dolorum quia. Ut, laboriosam sunt incidunt ad corrupti culpa similique commodi repellat, tempore veniam molestias perferendis nihil quibusdam sapiente temporibus quis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ach Rizal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni voluptatibus odio placeat, quas animi veniam dicta aperiam est quo? Maxime facere voluptatibus voluptates molestiae qui a adipisci beatae totam incidunt, at nam quisquam ratione corporis sint error sunt, odit assumenda dicta? Magnam laboriosam consequuntur expedita provident quidem ullam, voluptatum error sunt autem modi quis corporis. A doloribus distinctio quis optio repellat suscipit, ex aspernatur pariatur iste itaque? Adipisci quod dolorum quasi ratione, maxime laboriosam nisi quaerat quidem possimus, animi dolores."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
