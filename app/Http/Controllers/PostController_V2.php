<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController_V2 extends Controller
{
    public function __invoke(Post $post)
    {
        return view('blog_tailwind.postView', [
            'post' => $post
        ]);
    }
}
