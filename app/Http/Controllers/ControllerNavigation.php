<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\post;
class ControllerNavigation extends Controller
{
    // In order to go to the index page 
   
    public function index()
    {     
        $posts = post::paginate(6);
        $categorys = category::get();
        //$posts = post::whereBelongsTo($categorys)->get();
        //$posts = post::where('categorie_id', $categorys->id)->paginate(10);
        //$posts = $posts->category;
        //$posts = $posts->category;
        //$categorys = category::find(1)->posts(); 
        return view('index' , compact('posts' , 'categorys'));
        //dd($posts);
    }

    // In order to go to the contact page 
    public function contact(){
        return view('contact');
    }


    // In order to go to the author page 
    public function author(){
        return view('author');
    }


    public function about(){
        return view('about-me');
    }

    // In order to go to the page login
    // In order to go to the post details and sershe to datadase  page 
    public function post_details($id){
        //
    }

    public function login(){
        return view('login');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
