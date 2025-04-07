<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Requests\Post\StoreRequest;

class PostController extends Controller
{
    protected $postModel;
    public function __construct(Post $postModel)
    {
        $this->postModel = $postModel;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Post/List', [
            'posts' => $this->postModel->getPosts(),
            'message' => session('message'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Post/Form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $postValidated = $request->validated();
        $createPost = Post::create($postValidated);
        if ($createPost) {
            return redirect()->route('posts.index')->with('message', 'Post created successfully.');
        }
        return abort(500, 'Post creation failed.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return Inertia::render('Post/Show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return Inertia::render('Post/Form', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Post $post)
    {
        $postValidated = $request->validated();
        $updatePost = $post->update($postValidated);
        if ($updatePost) {
            return redirect()->route('posts.index')->with('message', 'Post updated successfully.');
        }
        return abort(500, 'Post update failed.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        try {
            $post->delete();
            return redirect()->route('posts.index')->with('message', 'Post deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('posts.index')->with('error', 'Failed to delete post.');
        }
    }
}
