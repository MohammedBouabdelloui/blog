<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\category;
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
        return redirect()->route('index');
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
     * filter posts a category 
     */
    public function show($id)
    {
        $posts = category::find($id)->posts;
        
        return view('search-result' ,compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($post_id)
    {
        //
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
// filter posts a id post 
     public function filter_posts($id){
         $post = post::find($id);
         $comments = post::find($id)->comments;
         if($post){
             return view('post-elements' , compact('post','comments'));
         }else{
            return view('404');
         }
     }
    
// filter posts a author 
     public function author_filter($id_author){
        $posts = author::find($id_author)->posts;
        return view('search-result' ,compact('posts'));
     }
}  