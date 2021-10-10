<?php

namespace App\Models;


class course
{
    private static $blog_courses = [
        [
            "title" => "Materi 1",
            "slug" => "materi-1",
            "author" => "Kemala",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
        [
            "title" => "Materi TIK",
            "slug" => "materi-2",
            "author" => "Salwa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit."
        ],
    ];

    public static function all() {
        return collect(self::$blog_courses);
    }

    public static function find($slug) {
        $courses = static::all();
        return $courses->firstWhere('slug', $slug);
    }
}
