<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "#1",
            "author" => "Gojou Satoru",
            "slug" => "post-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nesciunt, voluptatem similique, delectus voluptatibus vitae 
            ipsa nemo provident possimus accusamus ut ratione autem. Laborum 
            facere aut, sapiente inventore repellendus qui quia pariatur odio id 
            iusto aliquid dignissimos quisquam sunt itaque ipsa ipsam 
            corrupti laudantium perspiciatis ducimus nisi delectus earum nobis 
            laboriosam? Ut assumenda deserunt itaque, eos, nihil corporis tenetur 
            blanditiis nisi doloribus esse ex omnis quos ab consequuntur, nesciunt 
            nemo? Esse inventore repellat vitae odit placeat quidem in blanditiis 
            laborum delectus?"
        ],
        [
            "title" => "#2",
            "author" => "Uchiha Saskeh",
            "slug" => "post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nesciunt, voluptatem similique, delectus voluptatibus vitae 
            ipsa nemo provident possimus accusamus ut ratione autem. Laborum 
            facere aut, sapiente inventore repellendus qui quia pariatur odio id 
            iusto aliquid dignissimos quisquam sunt itaque ipsa ipsam 
            corrupti laudantium perspiciatis ducimus nisi delectus earum nobis 
            laboriosam? Ut assumenda deserunt itaque, eos, nihil corporis tenetur 
            blanditiis nisi doloribus esse ex omnis quos ab consequuntur, nesciunt 
            nemo?"
        ],
        [
            "title" => "#3",
            "author" => "Naruto Uzumaki",
            "slug" => "post-ketiga",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nesciunt, voluptatem similique, delectus voluptatibus vitae 
            ipsa nemo provident possimus accusamus ut ratione autem. Laborum 
            facere aut, sapiente inventore repellendus qui quia pariatur odio id 
            iusto aliquid dignissimos quisquam sunt itaque ipsa ipsam 
            corrupti laudantium perspiciatis ducimus nisi delectus earum nobis 
            laboriosam?"
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
