<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $allpost = [
            ['id' => 1, 'name' => 'meme', 'date' => '20/7/2024'],
            ['id' => 2, 'name' => 'mama', 'date' => '20/7/2024'],
            ['id' => 3, 'name' => 'momo', 'date' => '20/7/2024'],
        ];

        return view("posts.index", ['posts' => $allpost]);
    }

    public function show($postid) {
        $allpost = [
            ['id' => 1, 'name' => 'meme', 'date' => '20/7/2024'],
            ['id' => 2, 'name' => 'mama', 'date' => '20/7/2024'],
            ['id' => 3, 'name' => 'momo', 'date' => '20/7/2024'],
        ];

        // البحث عن البوست بالـ id
        $post = collect($allpost)->firstWhere('id', $postid);

        return view("posts.show", ['post' => $post]);
    }
}
