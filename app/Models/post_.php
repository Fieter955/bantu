<?php

namespace App\Models;



class post_
{

        private static $blog_posts = [
            [
                "title" => "naruto uzumaki iya",
                "author" => "sasule",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae alias sint a cum minima excepturi natus asperiores reiciendis eum tenetur! Nemo aliquid corrupti cumque labore quibusdam tenetur temporibus aliquam deserunt."
            ],
            [
                "title" => "sasuke uchiha",
                "author" => "naruto",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae alias sint a cum minima excepturi natus asperiores reiciendis eum tenetur! Nemo aliquid corrupti cumque labore quibusdam tenetur temporibus aliquam deserunt."
            ]
        ];
        
        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($author){
            $posts = static::all();
            return $posts->firstWhere('author', $author);
        }
}
