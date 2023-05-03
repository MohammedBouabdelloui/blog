<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class ControllerNavigation extends Controller
{
    // In order to go to the index page 
   
    public function index()
    {     
        $posts = post::paginate(10);
        return view('index' , compact('posts'));
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
