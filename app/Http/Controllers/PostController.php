<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     */
    public function index()
    {     
        $posts = post::paginate(10);
        return view('index' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.create-poste');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = post::create([
        'title' => $request->title,
        'description' =>$request->description,
        'img_path_1' =>$request->img_1,
        'img_path_2' =>$request->img_2,
        'img_path_3' =>$request->img_3,
        'categorie_id' =>$request->categorie_id,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($post_id)
    {
        $post = post::findorFail($post_id);
        return view('edit_post' ,compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $post_id)
    {
        $post = post::findorFail('post_id');
        $post->title = $request->title;
        $post->description = $request->description;
        $post->img_path_1 = $request->img_1;
        $post->img_path_2 = $request->img_2;
        $post->img_path_3 = $request->img_3;
        $post->categorie_id = $request->categorie_id;
        $post->save();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($post_id)
    {
        
    }
}
