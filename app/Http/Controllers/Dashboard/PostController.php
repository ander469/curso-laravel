<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
    //metodo para eliminar un registro
        //$post = Post::find(7)-> delete();

        //$post = Post::find(1);
        //$post->update(
            //[
                //'title' => 'Mi tets',
                //'slug' => 'mi-primer-test',
                //'descripcion' => 'Descripcion de mi primer test',
                //'content' => 'Contenido de mi primer test',
                //'image' => 'zapato.jpg',
                //'posted' => 'not',
                
            //]
        //);
        /* Post::create(
            [
                'title' => 'Mi primer post',
                'slug' => 'mi-primer-post',
                'descripcion' => 'Descripcion de mi primer post',
                'content' => 'Contenido de mi primer post',
                'image' => 'imagen.jpg',
                'posted' => 'yes',
                'category_id' => $category->id,
            ]
        );*/
        return "index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
