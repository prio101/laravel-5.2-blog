<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Blog extends Model
{
    //custom table
    protected $table  = "blog";
     protected $fillable =['title' , 'post'] ;
    //Method for the getting all post 
    //From the blog table

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getAllPost() {
        
       $posts = Blog::all();
        
       return $posts;
    }
}
