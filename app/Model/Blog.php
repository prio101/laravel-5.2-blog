<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //custom table
    protected $table  = "blog";

    //Method for the getting all post 
    //From the blog table

    public function getAllPost() {
        
       $posts = Blog::all();
        
       return $posts;
    }
}
