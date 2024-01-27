<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogHomepageController_V2 extends Controller
{
    public function __invoke()
    {
        $posts = Post::query()
            ->where('published_at', '<=', now())
            ->with([
                'category',
                'media'
            ])
            ->orderByDesc('created_at')
            ->get();

        return view('blog_tailwind.homepage', [
            'posts' => $posts
        ]);
    }
}
