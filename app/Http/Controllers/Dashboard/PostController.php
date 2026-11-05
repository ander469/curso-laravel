<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\PutRequest;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::firstOrCreate(
        ['slug' => 'general'],
        ['title' => 'General']
    );  
        //$posts = Post::get();
        $posts = Post::paginate(4);
        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id');
        $post = new Post();
        
        return view('dashboard.post.create', compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $category = Category::firstOrCreate(
        ['slug' => 'general'],
        ['title' => 'General']
    ); 
        Post::create($request->validated());
            return to_route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('title', 'id');
        return view('dashboard.post.edit', compact('post', 'categories'));
    }

    public function update(StoreRequest $request, Post $post)
    {
        $data = $request->validated();
        //image
        if(isset($data['image'])){
            $data['image'] = $filename = time().'.'.$data['image']->extension();

            $request->image->move(public_path('uploads/posts'), $filename);
        }
            
        //image
        $post->update($data);
        return to_route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index');
    }
}
