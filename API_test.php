<?php
use App\Models\Article;
use Illuminate\Http\Request;

public function store(Request $request)
    {
        $validated = $request->validate([
            'article_link' => 'required|string|max:255',
            'article_tag' => 'required|string|max:100',
            'article_author' => 'required|string|max:100',
            'article_title' => 'required|string|max:255',
            'article_summary' => 'required|string',
            'article_content' => 'required|string',
            'article_image' => 'required|string|max:255',
            'article_video' => 'required|string|max:255',
            'article_date' => 'required|date',
            'article_status' => 'required|integer'
        ]);

        $article = Article::create($validated);

        return response()->json([
            'message' => 'Bài viết đã được đăng thành công!',
            'data' => $article
        ], 201);
    }


?>