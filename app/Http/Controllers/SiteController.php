<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\Blog;


class SiteController extends Controller
{   

    public function index() {

    //Get all post in index view

            
        $Blog = Blog::class;    
        
        $posts = $Blog::all();
        
        return view('welcome' , ['posts'=>$posts]) ;
     }
    
    public function show($id) {
        // Get a single post
        
        $Blog = Blog::class;
        
        $posts = $Blog::find($id);


        return view('post' , ['posts'=>$posts]);


    }


}    
