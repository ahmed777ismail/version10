<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = [
            [
                'id' => 1,
                'title' => 'php',
                'Bosted By' => 'Ahmed',
                'Created At' => '2024-5-1 01:38:00'
            ],
            [
                'id' => 2,
                'title' => 'Js',
                'Bosted By' => 'Mohmaed',
                'Created At' => '2024-5-1 01:38:00'
            ],
            [
                'id' => 3,
                'title' => 'Css',
                'Bosted By' => 'Abanoub',
                'Created At' => '2024-5-1 01:38:00'
            ],
            [
                'id' => 4,
                'title' => 'C++',
                'Bosted By' => 'Ahmed',
                'Created At' => '2024-5-1 01:38:00'
            ],
        ];
        return view('posts.index', ['posts' => $allPosts]);
    }

    public function show($postId)
    {
        return view('posts.show');
    }
}
