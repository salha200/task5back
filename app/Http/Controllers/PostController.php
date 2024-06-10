<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\JsonResponse;

class PostController extends ApiController
{
    public function index(): JsonResponse
    {
        $post=Post::with('category')->get();
        return response()->json([
           'Post'=>  $post
       ]);
    }

    public function store(PostRequest $request): JsonResponse
    {
        $request->validate([
            'name'=>['required','string'],
            'body' => ['required|string|min:10|max:10000'],
            'category_id'=>['required','integer','exists:Category,id'],
                    ]);
                    Post::create([
                    'name'=>$request->name,
                    'body'=>$request->body,
                    'category_id'=>$request->category_id
                    ]);
                    return response()->json([
                        'status'=>true
                    ]);
        
    }

    public function show(Post $post): JsonResponse
    {
        return response()->json($post);
    }

    public function update(PostRequest $request, Post $post): JsonResponse
    {
        $post->update(  [
            'name'=>['required','string'],
        'body' => ['required|string|min:10|max:10000'],
        'category_id'=>['required','integer','exists:Category,id']]);
        return response()->json($post);
    }

    public function destroy(Post $post): JsonResponse
    {
        if (!$post) {
            return response()->json(['error' => 'post not found'], 404);
        }
        $post->delete();
        return response()->json('post deleted');
     
    }
}