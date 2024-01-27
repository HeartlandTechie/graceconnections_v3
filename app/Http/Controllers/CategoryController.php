<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        $posts = Post::query()
            ->where('category_id', $category->id)
            ->where('published_at', '<=', now())
            ->with([
                'category',
                'media'
            ])
            ->get();

        return view('blog.categoryView', [
            'posts' => $posts
        ]);
    }
}
